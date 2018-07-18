<?php

namespace App\Http\Controllers;

use App\Jobs\SendSms;
use App\Models\Account;
use App\Models\AccountTransaction;
use App\Models\AccountTransactionDetail;
use App\Models\ApprovedLoan;
use App\Models\CustomerMessage;
use App\Models\Masterfile;
use App\Models\Payment;
use App\Models\RepaymentSchedule;
use App\Models\TransactionType;
use Carbon\Carbon;
use Edwinmugendi\Sapamapay\MpesaApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Safaricom\Mpesa\Mpesa;

class MpesaPaymentController extends Controller
{

    public $access_token;
    private  $configs = array(
        'AccessToken' => '',
        'Environment' => 'live',
        'Content-Type' => 'application/json',
        'Verbose' => 'true',
    );
    public function __construct()
    {

    }

    public function getPayment(Request $request)
    {
        $input = $request->all();
        $input['tenant_id'] = null;
        $input['mf_id'] = null;
        $userName = $request->FirstName;
        $phone = $request->MSISDN;
        $p_number = '0' . ltrim($request->MSISDN, '254');
        if (is_null(Payment::where('ref_number', $request->TransID)->first())) {
//        echo  $p_number;die;
        $mf = Masterfile::where('national_id', $input['BillRefNumber'])->orWhere('phone_number', $p_number)->first();
        if (!is_null($mf)) {
            $input['account_number'] = $mf->national_id;
            $input['tenant_id'] = $mf->tenant_id;
            $input['mf_id'] = $mf->id;
            $userName = explode(' ', $mf->full_name)[0];
//                $phone = $mf->phone_number;

        }
//            print_r($mf);die;
        $input['payment_mode'] = "MPESA";

        $payment = Payment::create([
            'payment_mode' => 'MPESA',
            'account_number' => $request->BillRefNumber,
            'ref_number' => $request->TransID,
            'amount' => $request->TransAmount,
            'paybill' => $request->BusinessShortCode,
            'phone_number' => $request->MSISDN,
            'BillRefNumber' => $request->BillRefNumber,
            'TransID' => $request->TransID,
            'TransTime' => $request->TransTime,
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'tenant_id' => $input['tenant_id'],
            'received_on' => Carbon::now(),
            'mf_id' => $input['mf_id']
        ]);
        if (!is_null($mf)) {
            DB::transaction(function () use ($input, $mf, $payment) {
                $loan = ApprovedLoan::where([['client_id', $input['mf_id']], ['paid', false]])->first();
                //record an account transaction
                $transactionType = TransactionType::where('name', 'Loan Repayment')->first();
                $accountTransaction = AccountTransaction::create([
                    'transaction_type_id' => $transactionType->id,
                    'date' => Carbon::now(),
                    'tenant_id' => $input['tenant_id'],
                    'loan_id' => (!is_null($loan)) ? $loan->id : null
                ]);
                $to = Account::where([['isMaster', true], ['tenant_id', $mf->tenant_id]])->first();
                $transactionDetails = AccountTransactionDetail::create([
                    'account_transaction_id' => $accountTransaction->id,
                    'from_account' => $mf->national_id,
                    'to_account' => $to->account_number,
                    'account_transaction_type' => '',
                    'amount' => $input['TransAmount'],
                    'terms' => cash,
                    'reference' => $input['TransID'],
                    'tenant_id' => $input['tenant_id'],
                    'from_account_trans_type' => credit,
                    'to_account_trans_type' => debit,
                ]);
//                print_r($loan);die();
                if (!is_null($loan)) {
                    if ($input['TransAmount'] >= $loan->balance) {
                        $loan->paid = true;
                        $loan->status = paid;
                        $loan->balance = $loan->balance - $input['TransAmount'];
                        $loan->save();
                        RepaymentSchedule::where('loan_id', $loan->id)
                            ->update(['is_paid' => true, 'balance' => 0]);
                    } else {
//                    die;
                        //make partial payments
                        $repayments = RepaymentSchedule::where([
                            ['is_paid', false],
                            ['loan_id', $loan->id]
                        ])->orderBy('id')->get();
//                   print_r($repayments);die;
                        if (count($repayments)) {
//                        $first = $repayments->first()->balance;
                            $amount = $input['TransAmount'];
                            foreach ($repayments as $repayment) {
                                if ($amount > $repayment->balance) {
                                    //reduce the amount by the balance
                                    $amount = $amount - $repayment->balance;
                                    $repayment->is_paid = true;
                                    $repayment->balance = 0;
                                    $repayment->save();
                                } elseif ($amount == $repayment->balance) {
                                    $repayment->balance = $repayment->balance - $amount;
                                    $repayment->is_paid = true;
                                    $repayment->save();
                                    $amount = $repayment->balance - $amount;
                                } else {
                                    if ($amount > 0) {
                                        $repayment->balance = $repayment->balance - $amount;
                                        $repayment->save();
                                        $amount = 0;
                                    }
                                }

                            }
                            $loan->balance = $loan->balance - $input['TransAmount'];
                            if ($loan->balance <= 0) {
                                $loan->paid = true;
                                $loan->status = paid;
                            }
                            $loan->save();
                        }
                    }

                }

                $payment->processed = true;
                $payment->save();
            });
            $message = 'Dear ' . $userName . ' your payment of ' . $request->TransAmount . ' Ksh has been received. Pay your loans early to improve your rating.';
            $mess = CustomerMessage::create([
                'phone_number'=> $mf->phone_number,
                'name'=>$mf->full_name,
                'user_id'=>$mf->id,
                'tenant_id'=>$mf->tenant_id,
                'message_type' => "SMS",
                'message'=>$message,
            ]);
            SendSms::dispatch($message, $phone,$mf->tenant_id,$mess->id);
        }else{
            $message = 'Dear ' . $userName . ' your payment of ' . $request->TransAmount . ' Ksh has been received. Pay your loans early to improve your rating.';
            $mess = CustomerMessage::create([
                'phone_number'=> $phone,
                'name'=>$userName,
//                'user_id'=>$mf->id,
                'tenant_id'=>2,
                'message_type' => "SMS",
                'message'=>$message,
            ]);
            SendSms::dispatch($message, $phone,2,$mess->id);
        }

    }
       return ['C2BPaymentConfirmationResult'=>'success'];
    }

    public function getPaymentValidation(Request $request){
//        $account = Masterfile::where('national_id',$request->BillRefNumber)->first();
//        if(!is_null($account)){
//            return $array = array(
//                'ResultCode' => '0',
//                'ResultDesc' => 'Service processing successful',
//            );
//        }
//        return $array = array(
//            'ResultCode' => '1',
//            'ResultDesc' => 'Service processing failed',
//        );

        return $array = array(
            'ResultCode' => '0',
            'ResultDesc' => 'Service processing successful',
        );
    }

    public function simulate(){
        $mpesa= new Mpesa();
        $c2bTransaction= $mpesa->c2b(881595, 'CustomerPayBillOnline', 1000, 254715862938, '21844232' );
        var_dump($c2bTransaction);
    }

    public function generateToken(){



        return $this->configs['AccessToken'] =  Mpesa::generateLiveToken();

    }

    public function registerUrls(){
//        $this->generateToken();
//        $mpesa = new MpesaApi();
//        $api = 'c2b_register_url';
//        $parameters = array(
//            'ValidationURL' => 'https://salasa.co.ke/getPaymentValidation',
//            'ConfirmationURL' => 'https://salasa.co.ke/getPayment',
//            'ResponseType' => 'Cancelled',
//            'ShortCode' => '881595',
//        );
//        $response = $mpesa->call($api, $this->configs, $parameters);
        $token = Mpesa::generateLiveToken();

        $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token)); //setting custom header


        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'ValidationURL' => 'https://salasa.co.ke/getPaymentValidation',
            'ConfirmationURL' => 'https://salasa.co.ke/getPayment',
            'ResponseType' => 'Completed',
            'ShortCode' => '881595',
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $curl_response = curl_exec($curl);
        print_r($curl_response);

        echo $curl_response;
    }

//    public function simulate(){
//        $token =
//        var_dump($token);
//    }
}

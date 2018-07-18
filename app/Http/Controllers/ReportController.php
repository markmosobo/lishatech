<?php

namespace App\Http\Controllers;

use App\Models\Masterfile;
use App\Models\RepaymentSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function repayments(){
        $repayments = RepaymentSchedule::query()
            ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id')
            ->where('is_paid',false)
            ->where('masterfiles.tenant_id',Auth::user()->tenant_id)
            ->whereBetween('due_date',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])
            ->orderBy('repayment_schedules.due_date')
            ->get();
        return view('reports.repayments',[
            'repayments' => $repayments
            ]);
    }

    public function getExpectedRepayments(Request $request){
        $startDate = '';$endDate = '';
        if($request->filter == 'pre-defined'){
            switch ($request->value){
                case 'today';
                    $startDate = Carbon::today()->startOfDay();
                    $endDate = Carbon::today()->endOfDay();
                break;
                case  'tomorrow':
                    $startDate = Carbon::tomorrow()->startOfDay();
                    $endDate = Carbon::tomorrow()->endOfDay();
                break;

                case 'this-week':
                    $startDate = Carbon::today()->startOfWeek()->startOfDay();
                    $endDate = Carbon::today()->endOfWeek()->endOfDay();
                    break;

                case 'this-month':
                    $startDate = Carbon::today()->startOfMonth()->startOfDay();
                    $endDate = Carbon::today()->endOfMonth()->endOfDay();
                    break;
            }
        }else if ($request->filter == 'date-range'){
            $startDate = Carbon::parse($request->date_from)->startOfDay();
            $endDate = Carbon::parse($request->date_to)->endOfDay();
        }

        $repayments = RepaymentSchedule::query()
            ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id')
            ->where('is_paid',false)
            ->where('masterfiles.tenant_id',Auth::user()->tenant_id)
            ->whereBetween('due_date',[$startDate,$endDate])
            ->orderBy('repayment_schedules.due_date')
            ->get();

        return response()->json([
            'repayments'=> $repayments,
            'total'=>$repayments->sum('balance')
        ]);
    }

    public function overdueRepayments(){

        if(LoggedUserController::isAllAccessGranted()){
            $repayments = RepaymentSchedule::query()
                ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id','users.name')
//                ->leftJoin('approved_loans','approved_loans.id','=','repayment_schedules.loan_id')
//                ->leftJoin('loan_applications','approved_loans.application_id','=','loan_applications.id')
//                ->leftJoin('users','users.id','=','loan_applications.agent_id')
                ->where('is_paid',false)
                ->where('repayment_schedules.due_date','<',Carbon::today()->startOfDay())
                ->where('masterfiles.tenant_id',Auth::user()->tenant_id)
//            ->whereBetween('due_date',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])
                ->get();
        }else{
            $repayments = RepaymentSchedule::query()
                ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id','users.name')
//                ->leftJoin('approved_loans','approved_loans.id','=','repayment_schedules.loan_id')
//                ->leftJoin('loan_applications','approved_loans.application_id','=','loan_applications.id')
//                ->leftJoin('users','users.id','=','loan_applications.agent_id')
                ->where('is_paid',false)
                ->where('masterfiles.tenant_id',Auth::user()->tenant_id)
//            ->whereBetween('due_date',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])
                ->where('repayment_schedules.due_date','<',Carbon::today()->endOfDay())
//                ->where('loan_applications.agent_id',Auth::id())
                ->get();
        }

//        print_r($repayments);die;
        return view('reports.overdue-report',[
            'repayments' => $repayments
            ]);
    }

    public function customerStatement(){
        return view('reports.customer-statement',[
            'customers'=>Masterfile::where('b_role',client)->where('tenant_id',Auth::user()->tenant_id)->get()
        ]);
    }

    public function getCustomerStatement(Request $request){
        $statements = RepaymentSchedule::where('mf_id',$request->mf_id)->get();

        return view('reports.customer-statement',[
            'customers'=>Masterfile::where('b_role',client)->where('tenant_id',Auth::user()->tenant_id)->get(),
            'statements'=>$statements,
            'client'=>Masterfile::find($request->mf_id)
        ]);
    }
}

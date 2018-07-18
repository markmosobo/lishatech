<?php

namespace App\Jobs;

//use App\Models\Sms;
use App\Models\CustomerMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use infobip;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $_sms;
    public $tries = 2;
    protected  $password = 'jemma2018';
    protected $username = 'JOENJERU';
    protected $_message;
    protected $to;
    protected $message_id;
    protected $tenant;
    public function __construct($m,$to,$tenant_id,$mId)
    {
        $this->_message = $m;
        $this->to = $to;
        $this->tenant = $tenant_id;
        $this->message_id = $mId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        Log::info('sending sms');
        //get credentials
        $cred = \App\Models\InfoBip::where('tenant_id',$this->tenant)->first();

        $client = new infobip\api\client\SendMultipleTextualSmsAdvanced(new infobip\api\configuration\BasicAuthConfiguration($cred->username, $cred->password));
        $destination = new infobip\api\model\Destination();
//        if($this->_sms->)
        if($this->to[0] ==='0'){
            $this->to = '254'.ltrim($this->to,'0');
        }
//        var_dump($this->to);die();
        $destination->setTo($this->to);



        $message = new infobip\api\model\sms\mt\send\Message();
        $message->setFrom($cred->alphnumeric);
        $message->setDestinations([$destination]);
        $message->setText($this->_message);
        $message->setNotifyUrl(url('infoBipCallback'));
        $message->setCallbackData($this->message_id);
//        $message->setNotifyUrl(url('infobip-callback/'.$this->message_id));

        $requestBody = new infobip\api\model\sms\mt\send\textual\SMSAdvancedTextualRequest();
        $requestBody->setMessages([$message]);
        $response = $client->execute($requestBody);
//        Log::info($response);
        if(!is_null($this->message_id)){
            $message = CustomerMessage::find($this->message_id);
            $message->sent = true;
            $message->status = $response->getMessages()[0]->getStatus()->getGroupName();
            $message->save();
        }


    }
}

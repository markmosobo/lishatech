<?php

namespace App\Jobs;

use App\Models\CustomerMessage;
use App\Models\Masterfile;
use App\Models\ReminderSchedule;
use App\Models\RepaymentSchedule;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ScheduleReminders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        Log::info('done')
        $reminderSchedules = ReminderSchedule::where('status',true)->get();
        if(count($reminderSchedules)){
            foreach ($reminderSchedules as $reminderSchedule){
                $repaymentSchedules = RepaymentSchedule::query()
                    ->select(['repayment_schedules.*'])
                    ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id')
                    ->where('is_paid','?')
                    ->whereRaw("DATEDIFF(due_date,'".Carbon::today()->endOfDay()."') = ?")
                    ->where('masterfiles.tenant_id','?')
                    ->setBindings([false,$reminderSchedule->days,$reminderSchedule->tenant_id])->orderBy('id')
                    ->get();


                if(count($repaymentSchedules)){
//                    $schedul = $repaymentSchedules->disti
                    foreach ($repaymentSchedules as $repaymentSchedule){
                        $amount = RepaymentSchedule::where([
                            ['is_paid',false],
                            ['loan_id',$repaymentSchedule->loan_id],
                            ['due_date','<=',$repaymentSchedule->due_date]
                        ])->sum('balance');
                        if(is_null(CustomerMessage::where([['schedule_id',$repaymentSchedule->id],['days',$reminderSchedule->days]])->first())) {
                            $mf = Masterfile::find($repaymentSchedule->mf_id);
                            $mess = str_replace([
                                '@customer',
                                '@amount',
                                '@date',
                                "@account",
                                '@paybill'
                            ], [
                                explode(' ',$mf->full_name)[0],
//                                $repaymentSchedule->balance,
                                $amount." Ksh",
                                Carbon::parse($repaymentSchedule->due_date)->toFormattedDateString(),
                                $repaymentSchedule->account_number,
                                881595
                            ], $reminderSchedule->message);

                            $message = CustomerMessage::create([
                                'phone_number' => $mf->phone_number,
                                'name' => $mf->full_name,
                                'user_id' => $mf->id,
                                'message' => $mess,
                                'sent' => false,
                                'execution_time' => Carbon::today()->midDay(),
                                'loan_id' => $repaymentSchedule->loan_id,
                                'tenant_id' => $mf->tenant_id,
                                'message_type' => "SMS",
                                'days' => $reminderSchedule->days,
                                'schedule_id' => $repaymentSchedule->id
                            ]);
                        }
                    }
                }
            }
        }
    }
}

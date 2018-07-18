<?php

namespace App\Console;

use App\Jobs\ScheduleReminders;
use App\Jobs\SendReminder;
use App\Jobs\SendSms;
use App\Models\CustomerMessage;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//        $schedule->job(new SendReminder())->everyMinute();
//        $schedule->job(new ScheduleReminders())->everyMinute();
//        $schedule->job(new ScheduleReminders())->dailyAt('9:25');
//        $schedule->call(function () {
//            $customerMessages = CustomerMessage::where('sent',false)->get();
//            if(count($customerMessages)){
//                foreach ($customerMessages as $message){
//                    SendSms::dispatch($message->message,$message->phone_number,$message->tenant_id,$message->id);
//                }
//            }
//        })
////            ->everyMinute();
//            ->dailyAt('9:30');
//
//        // make database backup
//        $schedule->command('backup:run --only-db')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

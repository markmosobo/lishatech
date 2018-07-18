<?php

namespace App\Http\Controllers;

use App\Models\Masterfile;
use App\Models\Payment;
use App\Models\RepaymentSchedule;
use App\Models\TicketLine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $todayPayments = RepaymentSchedule::query()
//            ->leftJoin('masterfiles','masterfiles.id','=','repayment_schedules.mf_id')
//            ->where('masterfiles.tenant_id',Auth::user()->tenant_id)
//            ->whereBetween('due_date',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])->sum('balance');
//
//        $totalPaidToday = Payment::where([['tenant_id',Auth::user()->tenant_id]])
//            ->whereBetween('created_at',[Carbon::today()->startOfDay(),Carbon::today()->endOfDay()])
//            ->sum('amount');
////        var_dump($totalPaidToday);die();
        return view('home');
    }
}

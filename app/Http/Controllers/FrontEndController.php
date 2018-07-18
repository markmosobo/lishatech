<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventSchedule;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index',[
            'latestEvent'=>Event::query()->orderByDesc('event_date')->first(),
            'events'=>Event::query()->orderByDesc('event_date')->get(),
        ]);
    }

    public function eventList(){
        return view('front.event-list');
    }

    public function singleEvent($id){
        $event =Event::find($id);
//        print_r($event->toArray());die;
        return view('front.single-event',[
            'event'=> $event,
            'schedules' => EventSchedule::where('event_id',$event->id)->get()
        ]);
    }
}

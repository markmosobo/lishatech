<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
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

    public function about(){
        return view('front.about',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function new_here(){
        return view('front.new_here',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function staff(){
        return view('front.staff',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function eventList(){
        return view('front.event-list',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
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

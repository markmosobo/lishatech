<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventSchedule;
use App\Models\Sermon;
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

    public function newHere(){
        return view('front.new-here',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function churchStaff(){
        return view('front.church-staff',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function donate(){
        return view('front.donate',[
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

    public function eventCalendar(){
        return view('front.event-calendar',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function sermonList(){
        return view('front.sermon-list',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'sermons'=> Sermon::orderByDesc('id')->take(3)->get()
        ]);
    }

    public function sermonSeries(){
        return view('front.sermon-series',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'sermons'=>Sermon::orderByDesc('sermon_date')->take(6)->get()
        ]);
    }

    public function recentSermon($id){
        $sermon=Sermon::find($id);
        return view('front.recent-sermon')->withSermon($sermon);
    }

    public function pastSermon($id){
        $sermon=Sermon::find($id);
        return view('front.past-sermon')->withSermon($sermon);
    }

    public function gallery(){
        return view('front.gallery',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

//    public function singleSermon($id){
//        $event =Event::find($id);
//        return view('front.single-sermon');
//    }

    public function contact(){
        return view('front.contact',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all()
        ]);
    }

    public function recentBlog(){
        return view('front.recent-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all()
        ]);
    }

    public function single_recentBlog(){
        return view('front.single-recent-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all()
        ]);
    }

    public function pastBlog(){
        return view('front.past-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all()
        ]);
    }

    public function single_pastBlog(){
        return view('front.single-past-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all()
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

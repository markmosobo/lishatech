<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\churchGroupMember;
use App\Models\Contact;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventSchedule;
use App\Models\Location;
use App\Models\Members;
use App\Models\Sermon;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index',[
            'latestEvent'=>Event::query()->orderByDesc('event_date')->first(),
            'events'=>Event::query()->orderByDesc('event_date')->get(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function about(){
        return view('front.about',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get(),
            'aboutuses'=>AboutUs::all()
        ]);
    }

    public function newHere(){
        return view('front.new-here',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function churchStaff(){
        return view('front.church-staff',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get(),
            'members'=>Members::all()
        ]);
    }

    public function donate(){
        return view('front.donate',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function eventList(){
        return view('front.event-list',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function eventCalendar(){
        return view('front.event-calendar',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function sermonList(){
        return view('front.sermon-list',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'sermons'=> Sermon::orderByDesc('id')->take(3)->get(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function sermonSeries(){
        return view('front.sermon-series',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'sermons'=>Sermon::orderByDesc('sermon_date')->take(6)->get(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function recentSermon($id){
        $sermon=Sermon::find($id);
        return view('front.recent-sermon',['contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()])->withSermon($sermon);
    }

    public function pastSermon($id){
        $sermon=Sermon::find($id);
        return view('front.past-sermon',['contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()])->withSermon($sermon);
    }

    public function gallery(){
        return view('front.gallery',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

//    public function singleSermon($id){
//        $event =Event::find($id);
//        return view('front.single-sermon');
//    }

    public function contact(){
        return view('front.contact',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function recentBlog(){
        return view('front.recent-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function pastBlog(){
        return view('front.past-blog',[
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'blogs'=>Blog::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function singleBlog($id){
        $blog=Blog::find($id);
        return view('front.single-blog',[
            'blog'=>$blog,
            'events' => Event::query()->with(['category'])->orderByDesc('event_date')->get(),
            'categories' => EventCategory::all(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function singleEvent($id){
        $event =Event::find($id);
//        print_r($event->toArray());die;
        return view('front.single-event',[
            'event'=> $event,
            'schedules' => EventSchedule::where('event_id',$event->id)->get(),
            'contacts'=>Contact::all(),
            'services'=>Service::orderByDesc('service_start_time')->take(2)->get(),
            'locations'=>Location::orderByDesc('id')->take(1)->get()
        ]);
    }
}

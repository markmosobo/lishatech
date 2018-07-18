<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
}

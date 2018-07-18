@extends('front.layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix">
        <div class="page-header-overlay" style="background-image:url({{ asset('images/default-event-title-image.jpg') }});"></div>
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>{{ \Carbon\Carbon::parse($event->event_date)->toFormattedDateString() }}</h2>
                <div class="header-event-time"></div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('event-list') }}">Events</a></li>
                <li class="active">{{ $event->title }}</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="single-event-content event-list-item event-dynamic">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <h2 class="event-title">{{ $event->title }}</h2>
                            <span class="event-date hidden">{{ $event->event_date }}</span>
                            <span class="hidden">From <span class="event-time">11 AM</span> to 4 PM</span>
                            <span class="meta-data event-location-address"><i class="fa fa-map-marker"></i> {{ $event->location }}</span>
                            <hr class="sm">
                            <a href="{{ url('single/'.$event->id) }}" class="event-title hidden"></a>
                            <ul class="list-group">
                                {{--<li class="list-group-item"> <span class="badge">1800.785.876</span> Call </li>--}}
                                <li class="list-group-item">
                                    <ul class="action-buttons">
                                        <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                        {{--<li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger"><i class="icon-compass"></i></a></li>--}}
                                        {{--<li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>--}}
                                        {{--<li title="Contact event manager"><a href="javascript:window.print()"><i class="icon-printer"></i></a></li>--}}
                                    </ul></li>
                            </ul>
                            {{--<a href="#" class="btn btn-primary btn-block btn-lg  event-tickets event-register-button">Book Tickets</a>--}}
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="event-details">
                                <div class="event-details-left">
                                    <img src="{{ asset('images/default-event-img.jpg') }}" alt="" class="temp-thumbnail">
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                        <p>{{ $event->description }}</p>
                                    </div>
                                </div>
                                <div class="event-details-right">
                                    <h3 class="heading-wbg">Event Schedule</h3>
                                    <div class="event-schedule">
                                        <div class="timeline"></div>
                                        @if(count($schedules))
                                            @foreach($schedules as $schedule)
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                {{--<div class="event-pro-tag label-warning" data-appear-animation="fadeInRight"><i class="icon icon-coffee"></i></div>--}}
                                                <strong><i class="fa fa-clock-o"></i> {{ $schedule->start_at }} - {{ $schedule->ends_at }}</strong>
                                                <span>{{ $schedule->description }}</span>
                                            </div>
                                        </div>
                                            @endforeach
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Body Content -->
    @endsection
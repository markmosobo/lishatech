@extends('front.layouts.app')
@section('content')
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Events</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Events</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 events-list-sidebar">
                        <div class="event-page-cal">
                            <span class="month">{{ date('M',now()->timestamp) }}</span>
                            <span class="year">{{ \Carbon\Carbon::now()->year }}</span>
                            <a href="javascript:void(0)" class="actions left"><i class="fa fa-angle-left"></i></a>
                            <a href="javascript:void(0)" class="actions right"><i class="fa fa-angle-right"></i></a>
                        </div>
                        {{--<h5>Select Location</h5>--}}
                        {{--<select class="form-control">--}}
                            {{--<option>Toronto</option>--}}
                            {{--<option>Texas, USA</option>--}}
                            {{--<option>London, UK</option>--}}
                        {{--</select>--}}
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="element-block events-listing">
                            <div class="events-listing-header">
                                <ul class="sort-source" data-sort-id="events" data-option-key="filter">
                                    <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                                    <li data-option-value=".fests"><a href="#">Fests</a></li>
                                    <li data-option-value=".meetings"><a href="#">Meetings</a></li>
                                    <li data-option-value=".prayers"><a href="#">Prayers</a></li>
                                    <li data-option-value=".celebrations"><a href="#">Celebrations</a></li>
                                </ul>
                            </div>
                            <ul class="events-listing-content sort-destination isotope-events" data-sort-id="events">
                                <li class="event-list-item event-dynamic grid-item prayers celebrations">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">22</span>
                                        	<span class="event-month">Sep, 14</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info">
                                            <h4><a href="single-event.html" class="event-title">Water Baptism</a></h4>
                                        </div>
                                        <div class="lined-info">
                                            <span class="meta-data"><i class="fa fa-clock-o"></i> Monday, <span class="event-time">10:00 AM</span></span>
                                        </div>
                                        <div class="lined-info event-location">
                                            <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">State Route, Madison US</span></span>
                                        </div>
                                    </div>
                                    <div class="event-list-item-actions">
                                        <a href="#" class="btn btn-default btn-transparent event-tickets event-register-button">Register</a>
                                        <ul class="action-buttons">
                                            <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                            <li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li>
                                            <li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="event-list-item event-dynamic grid-item meetings">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">27</span>
                                        	<span class="event-month">Sep, 14</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info">
                                            <h4><a href="single-event.html" class="event-title">Sunday Meet Up</a></h4>
                                        </div>
                                        <div class="lined-info">
                                            <span class="meta-data"><i class="fa fa-clock-o"></i> Sunday, <span class="event-time">05:00 PM</span></span>
                                        </div>
                                        <div class="lined-info event-location">
                                            <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">55 Warren Street, New York</span></span>
                                        </div>
                                    </div>
                                    <div class="event-list-item-actions">
                                        <a href="#" class="btn btn-default btn-transparent event-tickets event-register-button">Register</a>
                                        <ul class="action-buttons">
                                            <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                            <li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li>
                                            <li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="event-list-item event-dynamic grid-item prayers">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">06</span>
                                        	<span class="event-month">Feb, 15</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info">
                                            <h4><a href="single-event.html" class="event-title">Holy shift: Strategic think</a></h4>
                                        </div>
                                        <div class="lined-info">
                                            <span class="meta-data"><i class="fa fa-clock-o"></i> Monday, <span class="event-time">10:00 AM</span></span>
                                        </div>
                                        <div class="lined-info event-location">
                                            <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">123 Broadway, New York, NY</span></span>
                                        </div>
                                    </div>
                                    <div class="event-list-item-actions">
                                        <a href="#" class="btn btn-default btn-transparent event-tickets event-register-button">Register</a>
                                        <ul class="action-buttons">
                                            <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                            <li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li>
                                            <li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="event-list-item event-dynamic grid-item fests">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">22</span>
                                        	<span class="event-month">Sep, 14</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info">
                                            <h4><a href="single-event.html" class="event-title">Water Baptism</a></h4>
                                        </div>
                                        <div class="lined-info">
                                            <span class="meta-data"><i class="fa fa-clock-o"></i> Monday, <span class="event-time">10:00 AM</span></span>
                                        </div>
                                        <div class="lined-info event-location">
                                            <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">State Route, Madison US</span></span>
                                        </div>
                                    </div>
                                    <div class="event-list-item-actions">
                                        <a href="#" class="btn btn-default btn-transparent event-tickets event-register-button">Register</a>
                                        <ul class="action-buttons">
                                            <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                            <li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li>
                                            <li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
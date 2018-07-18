@extends('front.layouts.app')
@section('content')
    @include('front.parallax')

    <div class="lead-content clearfix">
        <div class="lead-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 featured-block">
                        <h3>Our Community</h3>
                        <figure>
                            <a href="about.html"><img src="http://placehold.it/800x500&amp;text=IMAGE+PLACEHOLDER" alt="Our Community"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 featured-block">
                        <h3>Church Mission</h3>
                        <figure>
                            <a href="donate.html"><img src="http://placehold.it/800x500&amp;text=IMAGE+PLACEHOLDER" alt="Our Community"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 featured-block">
                        <h3>Join a Group</h3>
                        <figure>
                            <a href="new-here.html"><img src="http://placehold.it/800x500&amp;text=IMAGE+PLACEHOLDER" alt="Our Community"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                @if(count($events))
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        @if(!is_null($latestEvent))
                        <section class="upcoming-event format-standard event-list-item event-dynamic">
                            <a href="single-event.html" class="media-box">
                                <img src="{{ asset('images/slide1.jpg') }}" alt="">
                            </a>
                            <div class="upcoming-event-content">
                                <span class="label label-primary upcoming-event-label">Next coming event</span>
                                <div id="counter" class="counter clearfix" data-date="July 13, 2015">
                                    <div class="timer-col"> <span id="days"></span> <span class="timer-type">Days</span> </div>
                                    <div class="timer-col"> <span id="hours"></span> <span class="timer-type">Hours</span> </div>
                                    <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">Minutes</span> </div>
                                    <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">Seconds</span> </div>
                                </div>
                                <h3><a href="single-event.html" class="event-title">Youth participation</a></h3>
                                <span class="meta-data">On <span class="event-date">13 Jul, 15</span> at <span class="event-time">08:00 AM</span> at</span>
                                <span class="meta-data event-location"> <span class="event-location-address">State Route, Madison US</span></span>
                            </div>
                            <div class="upcoming-event-footer">
                                <a href="#" class="pull-right btn btn-primary btn-sm event-tickets event-register-button">Register</a>
                                <ul class="action-buttons">
                                    <li title="Share event"><a href="#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                    <li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li>
                                    <li title="Contact event manager"><a href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                </ul>
                            </div>
                        </section>
                            @endif
                    </div>
                    <div class="col-md-8 col-sm-7">
                        <div class="element-block events-listing">
                            <div class="events-listing-header">
                                <a href="{{ url('event-list') }}" class="pull-right basic-link">All Events</a>
                                <h3 class="element-title">Upcoming Events</h3>
                                <hr class="sm">
                            </div>
                            <div class="events-listing-content">
                                <div class="event-list-item event-dynamic">
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
                                </div>
                                <div class="event-list-item event-dynamic">
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
                                </div>
                                <div class="event-list-item event-dynamic">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <hr class="fw">
                <div class="row">
                    <div class="col-md-8">
                        <h3>From our blog</h3>
                        <hr class="sm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="very-latest-post format-standard">
                                    <div class="title-row">
                                        <a href="blog-post.html#comments" class="comments-go" title="10 comments"><i class="icon-dialogue-text"></i></a>
                                        <h4>Very latest</h4>
                                    </div>
                                    <a href="blog-post.html" class="media-box post-thumb">
                                        <img src="http://placehold.it/800x500&amp;text=IMAGE+PLACEHOLDER" alt="">
                                    </a>
                                    <h3 class="post-title"><a href="blog-post.html">Don't run behind the charm</a></h3>
                                    <div class="meta-data">by <a href="#">imithemes</a> on 25th August, 2014 in <a href="#">General</a></div>
                                    <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget...</p>
                                    <p><a href="blog-post.html" class="basic-link">Continue reading</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="blog-classic-listing">
                                    <li>
                                        <a href="blog-post.html"><strong class="post-title">Hear my people’s cry for peace</strong></a>
                                        <div class="meta-data">by <a href="#">imithemes</a> on 25th August, 2014 in <a href="#">General</a></div>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget...</p>
                                        <p><a href="blog-post.html" class="basic-link">Continue reading</a></p>
                                    </li>
                                    <li>
                                        <a href="blog-post.html"><strong class="post-title">Robin Williams: The death of our captain</strong></a>
                                        <div class="meta-data">by <a href="#">imithemes</a> on 12th August, 2014 in <a href="#">General</a></div>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget...</p>
                                        <p><a href="blog-post.html" class="basic-link">Continue reading</a></p>
                                    </li>
                                    <li>
                                        <a href="blog-post.html"><strong class="post-title">EPPN: It’s Time For Prison Reform</strong></a>
                                        <div class="meta-data">by <a href="#">imithemes</a> on 31st July, 2014 in <a href="#">General</a></div>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget...</p>
                                        <p><a href="blog-post.html" class="basic-link">Continue reading</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget latest_sermons_widget">
                            <ul>
                                <li class="most-recent-sermon clearfix">
                                    <h3>Recent Sermons</h3>
                                    <hr class="sm">
                                    <div class="latest-sermon-video fw-video">
                                        <iframe src="https://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
                                    </div>
                                    <div class="latest-sermon-content">
                                        <h4><a href="single-sermon.html">Rushing wind</a></h4>
                                        <div class="meta-data">by <a href="#">Chris Hodges</a></div>
                                        <p>Nulla consequat massa quis enim, aliquet nec nulla consequat massa quis enim, vulputate eget...</p>
                                    </div>
                                    <div class="sermon-links">
                                        <ul class="action-buttons">
                                            <li><a href="single-sermon.html" data-toggle="tooltip" data-placement="right" data-original-title="Watch Video"><i class="icon-video-cam"></i></a></li>
                                            <li><a href="single-sermon.html" data-toggle="tooltip" data-placement="right" data-original-title="Listen Audio"><i class="icon-headphones"></i></a></li>
                                            <li><a href="single-sermon.html" data-toggle="tooltip" data-placement="right" data-original-title="Download Audio"><i class="icon-cloud-download"></i></a></li>
                                            <li><a href="single-sermon.html" data-toggle="tooltip" data-placement="right" data-original-title="Download PDF"><i class="icon-download-folder"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="single-sermon.html"><strong class="post-title">Worship God’s Way</strong></a>
                                    <div class="meta-data">by <a href="#">Dino Rizzo</a></div>
                                </li>
                                <li>
                                    <a href="single-sermon.html"><strong class="post-title">What God Really Wants</strong></a>
                                    <div class="meta-data">by <a href="#">Chris Hodges</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
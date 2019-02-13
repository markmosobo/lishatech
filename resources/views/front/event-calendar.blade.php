@extends('front.layouts.app')
@section('content')
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Events Calendar</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Calendar</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="content-col">
                        <div class="row"><div class="col-md-9"><div id="calendar"><div id ="" class ="event_calendar calendar"></div></div></div><div class="col-md-3"><h2 class="title ">Event Preview</h2><div id="events-preview-box"><ul class=" sort-destination events-ajax-caller"><li class="event-item event-dynamic"><div style="display:none">
                                                <span class="event-multiple-tickets">1</span>
                                                <span class="adore_event_type1">Standard</span>
                                                <span class="adore_event_ticket1">All Booked</span>
                                                <span class="adore_event_booked1">100</span>
                                                <span class="adore_event_amount1">Free</span>

                                                <span class="adore_event_type2">Premium</span>
                                                <span class="adore_event_ticket2">All Booked</span>
                                                <span class="adore_event_booked2">50</span>
                                                <span class="adore_event_amount2">50</span>

                                                <span class="adore_event_type3">VIP</span>
                                                <span class="adore_event_ticket3">All Booked</span>
                                                <span class="adore_event_booked3">27</span>
                                                <span class="adore_event_amount3">150</span>

                                                <span class="adore_event_id">113</span>
                                                <span class="adore_event_title">Water Baptism</span>
                                                <span class="adore_event_url">https://demo.imithemes.com/adore-church-wp/?event=water-baptism&#038;event_date=2019-02-13&#038;reg=1</span>
                                                <span class="adore_event_paypal">https://www.sandbox.paypal.com/cgi-bin/webscr</span>
                                                <span class="adore_event_cdate">2019-02-13</span>
                                            </div><div class="grid-item-inner"><div class="preview-event-bar">
                                                    <div id="counter" class="counter-preview top-header" data-date="1550066401">
                                                        <div class="timer-col"> <span id="days"></span> <span class="timer-type">d</span> </div>
                                                        <div class="timer-col"> <span id="hours"></span> <span class="timer-type">h</span> </div>
                                                        <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">m</span> </div>
                                                        <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">s</span> </div>
                                                    </div>
                                                </div><a href="../index98c7.html?event=water-baptism&amp;event_date=2019-02-13" class="media-box"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4.jpg 800w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-300x188.jpg 300w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-768x480.jpg 768w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-330x206.jpg 330w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-200x125.jpg 200w" sizes="(max-width: 800px) 100vw, 800px" /></a><div id="load-preview-events" class="load-events" style="display:none;"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/themes/AdoreChurch/images/loader.gif"></div><div class="grid-content"><h3><a class="event-title" href="../index98c7.html?event=water-baptism&amp;event_date=2019-02-13">Water Baptism</a></h3><span class="meta-data"><i class="fa fa-calendar"></i> <span class="event-date">February 13, 2019</span> at <span class="event-time">10:00 am</span></span>
                                                    <span class="meta-data event-location-address"><i class="fa fa-map-marker"></i> State Route H, Saint Louis, MO, USA</span></div><div class="grid-footer clearfix"><a id="register-2761|1550066401" href="#" class="pull-right btn btn-sm btn-primary btn-sm event-tickets event-register-button">Register</a><ul class="action-buttons"><li title="Share event"><a href="#" data-trigger="focus" data-placement="right" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li><li title="Get directions" class="hidden-xs"><a href="#" class="cover-overlay-trigger event-direction-link"><i class="icon-compass"></i></a></li><li title="Contact event manager"><a id="contact-2761|1550066401" href="#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li></ul></div></div></div></li></ul></div></div>
                        <div class="clearfix"></div>	<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;t=Calendar%20with%20preview" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;text=Calendar%20with%20preview:https://demo.imithemes.com/adore-church-wp/calendar-with-preview/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;t=Calendar%20with%20preview&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;title=Calendar%20with%20preview" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/&amp;title=Calendar%20with%20preview&amp;summary=&amp;source=https://demo.imithemes.com/adore-church-wp/calendar-with-preview/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=Calendar with preview&amp;body=:https://demo.imithemes.com/adore-church-wp/calendar-with-preview/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                </div>
                </div>
            </div>
        </div>
    </div>
@stop
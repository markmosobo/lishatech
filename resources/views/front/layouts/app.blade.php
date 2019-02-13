<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" Alex Munyua">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
      ================================================== -->
    <link href="{{  asset('front/css/bootstrap.css')}} " rel="stylesheet" type="text/css">
    <link href="{{  asset('front/css/bootstrap-theme.css')}} " rel="stylesheet" type="text/css">
    <link href="{{  asset('front/css/style.css')}} " rel="stylesheet" type="text/css">
    <link href="{{  asset('front/vendor/prettyphoto/css/prettyPhoto.css')}} " rel="stylesheet" type="text/css">
    <link href="{{  asset('front/vendor/mediaelement/mediaelementplayer.css')}} " rel="stylesheet" type="text/css">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{  asset('front/css/ie.css')}} " media="screen" /><![endif]-->
    <link href="{{  asset('front/css/custom.css')}} " rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link href="{{  asset('front/colors/color1.css')}} " rel="stylesheet" type="text/css">
    <!-- SCRIPTS
      ================================================== -->
    <script src="{{  asset('front/js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Start Site Header -->
    @include('front.layouts.header')
    <!-- End Site Header -->
    <!-- Start Hero Slider -->
    <!-- End Hero Slider -->
    <!-- Lead Content -->
   @yield('content')
    <!-- End Body Content -->
    <!-- Gallery updates -->
    {{--<div class="gallery-updates cols5 clearfix">--}}
        {{--<ul>--}}
            {{--<li class="format-image"><a href="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
            {{--<li class="format-standard">--}}
                {{--<div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="no" data-style="slide" data-pause="yes">--}}
                    {{--<ul class="slides">--}}
                        {{--<li class="item"><a href="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname1]"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
                        {{--<li class="item"><a href="http://placehold.it/800x500&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname1]"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="format-image"><a href="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
            {{--<li class="format-standard">--}}
                {{--<div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="no" data-style="fade" data-speed="4000" data-pause="yes">--}}
                    {{--<ul class="slides">--}}
                        {{--<li class="item"><a href="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname2]"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
                        {{--<li class="item"><a href="http://placehold.it/400x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname2]"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="format-video"><a href="http://vimeo.com/37540860" data-rel="prettyPhoto" class="media-box"><img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>--}}
        {{--</ul>--}}
        {{--<div class="gallery-updates-overlay">--}}
            {{--<div class="container">--}}
                {{--<i class="icon-multiple-image"></i>--}}
                {{--<h2>Updates from our gallery</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- Start site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="site-footer-top">
                <div class="row">
                    <div class="col-md-4 widget footer_widget text_widget">
                        <h4>About our church</h4>
                        <hr class="sm">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra.</p>
                    </div>
                    <div class="col-md-4 widget footer_widget twitter_widget">
                        <h4>Twitter feeds</h4>
                        <hr class="sm">
                        <ul class="twitter-widget"></ul>
                    </div>
                    <div class="col-md-4 widget footer_widget newsletter_widget">
                        <h4>News subscription</h4>
                        <hr class="sm">
                        <p>Subscribe to our newsletter in order to receive the latest new &amp; articles. We promise we won't spam your inbox!</p>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Quick Info -->
                <div class="quick-info">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h4><i class="fa fa-clock-o"></i> Service Times</h4>
                            <p>Sundays @ 10:00 am<br>Starting October 1</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4><i class="fa fa-map-marker"></i> Our Location</h4>
                            <p>777, Path to God<br>United States of America</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4><i class="fa fa-envelope"></i> Contact Info</h4>
                            <p>11 - 00 - 653240<br>email@adorechurch.com</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4><i class="fa fa-clock-o"></i> Socialize with us</h4>
                            <ul class="social-icons-colored inversed">
                                <li class="facebook"><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="vimeo"><a href="http://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="twitter"><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-footer-bottom">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 copyrights-coll">
                            &copy; 2014 Adore Church. All Rights Reserved
                        </div>
                        <div class="col-md-6 col-sm-6 copyrights-colr">
                            <nav class="footer-nav" role="navigation">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="donate.html">Donate now</a></li>
                                    <li><a href="new-here.html">New here?</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- Event Directions Popup -->
<div class="quick-info-overlay">
    <div class="quick-info-overlay-left accent-bg">
        <a href="#" class="btn-close"><i class="icon-delete"></i></a>
        <div class="event-info">
            <h3 class="event-title"> </h3>
            <div class="event-address"></div>
            <a href="" class="btn btn-default btn-transparent btn-permalink">Full details</a>
        </div>
    </div>
    <div class="quick-info-overlay-right">
        <div id="event-directions"></div>
    </div>
</div>
<!-- Event Contact Modal Window -->
<div class="modal fade" id="Econtact" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="Econtact" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Contact Event Manager <span class="accent-color"></span></h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lname" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" class="form-control" placeholder="Your phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea rows="3" cols="5" class="form-control" placeholder="Additional notes"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Contact Now">
                </form>
            </div>
            <div class="modal-footer">
                <p class="small short">If you would prefer to call in for inquiries, please call 1800.785.876</p>
            </div>
        </div>
    </div>
</div>
<!-- Event Register Tickets -->
<div class="ticket-booking-wrapper">
    <a href="#" class="ticket-booking-close label-danger"><i class="icon icon-delete"></i></a>
    <div class="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3><strong>Book your</strong> <span>tickets</span></h3>
                </div>
                <div class="col-md-9">
                    <div class="event-ticket ticket-form">
                        <div class="event-ticket-left">
                            <div class="ticket-handle"></div>
                            <div class="ticket-cuts ticket-cuts-top"></div>
                            <div class="ticket-cuts ticket-cuts-bottom"></div>
                        </div>
                        <div class="event-ticket-right">
                            <div class="event-ticket-right-inner">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <span class="meta-data">Your ticket for</span>
                                        <h4 id="dy-event-title"></h4>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <span class="meta-data">Tickets count</span>
                                        <select class="form-control input-sm">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="event-ticket-info">
                                    <div class="row">
                                        <div class="col">
                                            <p class="ticket-col" id="dy-event-date"></p>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-warning btn btn-block ticket-col">Book</a>
                                        </div>
                                        <div class="col">
                                            <p id="dy-event-time">Starts </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="event-location" id="dy-event-location"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{  asset('front/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ asset('front/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{  asset('front/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{  asset('front/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{  asset('front/js/init.js') }}"></script> <!-- All Scripts -->
<script src="{{  asset('front/js/home.js') }}"></script>
<script src="{{ asset('front/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
<script src="{{ asset('front/vendor/countdown/js/jquery.countdown.min.js') }}"></script> <!-- Jquery Timer -->
<script src="{{ asset('front/vendor/mediaelement/mediaelement-and-player.min.js') }}"></script> <!-- MediaElements -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
</body>
</html>
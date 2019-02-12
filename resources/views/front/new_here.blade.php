<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.name') }}</title>
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
    <div class="page-header parallax clearfix" style="background-image:
    url(images/slide7.jpg); background-color:; height:px;">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>I'm New Here</h2>
            </div>
        </div>    </div>    <!-- End Page Header -->    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">

            <ol class="breadcrumb">
                <!-- Breadcrumb NavXT 6.2.1 -->
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Adore Church." href="https://demo.imithemes.com/adore-church-wp" class="home"><span property="name">Adore Church</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">I'm New Here</span><meta property="position" content="2"></span>          	</ol>

        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="content-col">
                        <div class="row">
                            <div class=" col-md-7" ><br />
                                <h2 class="">Get to know about Adore Church</h2>
                                <hr class="sm">
                                <p class="">Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p></div><div class=" col-md-5" ><br />
                                <div class="fw-video"></p>
                                    <iframe src="http://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;autoplay=0&amp;portrait=0" width="" height="" allowfullscreen></iframe>
                                    <p> </div></div></div>
                        <div class="spacer-50 "> </div>
                        <div class="row">
                            <div class="col-md-6 " >
                                <h3 class="">Sunday Gatherings</h3>
                                <p class="">Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                                <h3 class="">Time &amp; Location</h3>
                                <p class="">Our Sunday morning services are at 9 and 11am. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                <div id="googleMap"></div><div class="spacer-20"></div></p>
                            </div>
                            <div class="col-md-6 " >
                                <h3 class="">Common Questions</h3>
                                <div class="accordion" id="accordionnew">
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionnew" href="#new0"> Donec sed odio dui. Duis mollis <i class="fa fa-angle-down"></i> </a> </div>
                                        <div id="new0" class="accordion-body in collapse">
                                            <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading accordionize"> <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordionnew" href="#new1"> Fusce dapibus, tellus ac cursus <i class="fa fa-angle-down"></i> </a> </div>
                                        <div id="new1" class="accordion-body  collapse">
                                            <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading accordionize"> <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordionnew" href="#new2"> Donec ullamcorper nulla non metus <i class="fa fa-angle-down"></i> </a> </div>
                                        <div id="new2" class="accordion-body  collapse">
                                            <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="">What to expect</h3>
                                <p class="">Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                                <h3 class="">Get connected</h3>
                                <p class="">Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>	<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;t=I'm%20new%20here" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;text=I'm%20new%20here:https://demo.imithemes.com/adore-church-wp/im-new-here/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/im-new-here/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;t=I'm%20new%20here&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;title=I'm%20new%20here" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.imithemes.com/adore-church-wp/im-new-here/&amp;title=I'm%20new%20here&amp;summary=&amp;source=https://demo.imithemes.com/adore-church-wp/im-new-here/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=I&#039;m new here&amp;body=:https://demo.imithemes.com/adore-church-wp/im-new-here/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                </div>
                </div>
            </div>
        </div>
    </div>

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
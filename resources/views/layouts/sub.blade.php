<!doctype html>
<html class="no-js" lang="en">
<head>
@include('layouts.partials.head')
    <title> {{ config('app.name')  }} | @yield('title')</title>
    @stack("css")
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!-- navigation panel -->
{{--@include('layouts.partials.front-navbar')--}}
<!--end navigation panel -->


<!-- content section -->
@yield('content')
<!-- end content section -->

<!-- footer -->
{{--<footer>
    <div class=" bg-white footer-top">
        <div class="container">
            <div class="row margin-four">
                <!-- phone -->
                <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">123-456-7890</h6></div>
                <!-- end phone -->
                <!-- address -->
                <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Victoria, United States</h6></div>
                <!-- end address -->
                <!-- email -->
                <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:no-reply@domain.com" class="black-text">no-reply@domain.com</a></h6></div>
                <!-- end email -->
            </div>
        </div>
    </div>
    <div class="container footer-middle">
        <div class="row">
            <div class="col-md-3 col-sm-3 footer-link1 xs-display-none">
                <!-- headline -->
                <h5>About Us</h5>
                <!-- end headline -->
                <!-- text -->
                <p class="footer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <!-- end text -->
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4 footer-link2 col-md-offset-3">
                <!-- headline -->
                <h5>Company</h5>
                <!-- end headline -->
                <!-- link -->
                <ul>
                    <li><a href="about-us.html">About Company</a></li>
                    <li><a href="about-us.html">What We Do</a></li>
                    <li><a href="about-us.html">What We Think</a></li>
                    <li><a href="careers.html">Careers</a></li>
                </ul>
                <!-- end link -->
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4  footer-link3">
                <!-- headline -->
                <h5>Services</h5>
                <!-- end headline -->
                <!-- link -->
                <ul>
                    <li><a href="services.html">Web Development</a></li>
                    <li><a href="services.html">Graphic Design</a></li>
                    <li><a href="services.html">Copywriting</a></li>
                    <li><a href="services.html">Online Marketing</a></li>
                </ul>
                <!-- end link -->
            </div>
            <div class="col-md-2 col-sm-3 col-xs-4  footer-link4">
                <!-- headline -->
                <h5>Introduction</h5>
                <!-- end headline -->
                <!-- link -->
                <ul>
                    <li><a href="team-members.html">Team Members</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="our-clients.html">Our Clients</a></li>
                    <li><a href="careers.html">Careers With Us</a></li>
                </ul>
                <!-- end link -->
            </div>
        </div>
        <div class="wide-separator-line bg-mid-gray no-margin-lr margin-three no-margin-bottom"></div>
        <div class="row margin-four no-margin-bottom">
            <div class="col-md-6 col-sm-12 sm-text-center sm-margin-bottom-four">
                <!-- link -->
                <ul class="list-inline footer-link text-uppercase">
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="blog-masonry-3columns.html">Blog</a></li>
                    <li><a href="careers.html">Careers</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
                <!-- end link -->
            </div>
            <div class="col-md-6 col-sm-12 footer-social text-right sm-text-center">
                <!-- social media link -->
                <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <!-- end social media link -->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark-gray footer-bottom">
        <div class="container">
            <div class="row margin-three">
                <!-- copyright -->
                <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                    &copy; 2015 H-Code is proudly powered by ThemeZaa.
                </div>
                <!-- end copyright -->
                <!-- logo -->
                <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                    <a href="index.html"><img src="images/logo-light-gray.png" alt=""/></a>
                </div>
                <!-- end logo -->
            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!-- scroll to top End... -->
</footer>--}}
<!-- end footer -->

<!-- javascript libraries -->
{{--@include('layouts.partials.js')--}}
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/bootstrap-hover-dropdown.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/skrollr.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/smooth-scroll.js')}}"></script>
<!-- animation -->
<script type="text/javascript" src="{{ asset('front/assets/js/wow.min.js')}}"></script>
<!-- page scroll -->
<script type="text/javascript" src="{{ asset('front/assets/js/page-scroll.js')}}"></script>
<!-- easy piechart-->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.easypiechart.js')}}"></script>
<!-- parallax -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.parallax-1.1.3.js')}}"></script>
<!--portfolio with shorting tab -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.isotope.min.js')}}"></script>
<!-- owl slider  -->
<script type="text/javascript" src="{{ asset('front/assets/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup  -->
{{--<script type="text/javascript" src="{{ asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('front/assets/js/popup-gallery.js')}}"></script>--}}
<!-- text effect  -->
<script type="text/javascript" src="{{ asset('front/assets/js/text-effect.js')}}"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.revolution.js')}}"></script>
<!-- counter  -->
<script type="text/javascript" src="{{ asset('front/assets/js/counter.js')}}"></script>
<!-- fit videos  -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.fitvids.js')}}"></script>
<!-- imagesloaded  -->
<script type="text/javascript" src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- setting -->
{{--<script type="text/javascript" src="{{ asset('front/assets/js/main.js')}}"></script>--}}
<script type="text/javascript" src="{{ asset('front/assets/js/main2.js')}}"></script>
{{--<script type="text/javascript" src="{{ asset('front/assets/js/common.js')}}"></script>--}}
<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
</script>
@stack("js")
</body>
</html>

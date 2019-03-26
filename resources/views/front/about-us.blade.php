@extends('branch')

@section('title','About Us')

@section('content')

@foreach($aboutus as $about)
    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection-->
    <div class="feature-section feature-section-border-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25 align-items-center">

                <!--Feature Image start-->
                <div class="col-lg-5 col-12 order-1 order-lg-2 mb-40">
                    {{--<div class="feature-image"><img src="assets/images/others/feature.png" alt=""></div>--}}
                </div>
                <!--Feature Image end-->

                <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                    <div class="row">
                        <div class="col">
                            <div class="about-content">
                                <h3>About <span>{{config('app.name')}} Investments Limited</span></h3>
                                <h1>We Always Provide Priority to Our Customer</h1>
                                <p>{{$about->description}}</p>

                                <h3>Vision</h3>
                                <p>{{$about->vision}}</p>

                                <h3>Mission</h3>
                                <p>{{$about->mission}}</p>
                                {{--<ul class="feature-list">--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-piggy"></i>--}}
                                        {{--<h4>Low Cost</h4>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-science"></i>--}}
                                        {{--<h4>Modern Design</h4>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-display1"></i>--}}
                                        {{--<h4>Good Marketing</h4>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-signal"></i>--}}
                                        {{--<h4>Free Wifi</h4>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-map"></i>--}}
                                        {{--<h4>Easy to Find</h4>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="pe-7s-shield"></i>--}}
                                        {{--<h4>Reliable</h4>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection end-->

    {{--<!--Download apps section start-->--}}
    {{--<div class="download-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50" style="background-image: url(assets/images/bg/download-bg.jpg)">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}

                    {{--<!--Download Content start-->--}}
                    {{--<div class="download-content">--}}
                        {{--<h1>Download <span>Khonike</span> App <br>And Get Notification For New Properties</h1>--}}
                        {{--<div class="buttons">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-apple"></i>--}}
                                {{--<span class="text">--}}
                                    {{--<span>Available on the</span>--}}
                                    {{--Apple Store--}}
                                {{--</span>--}}
                            {{--</a>--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-android"></i>--}}
                                {{--<span class="text">--}}
                                    {{--<span>Get it on</span>--}}
                                    {{--Google Play--}}
                                {{--</span>--}}
                            {{--</a>--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-windows"></i>--}}
                                {{--<span class="text">--}}
                                    {{--<span>Download form</span>--}}
                                    {{--Windows Store--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="image"><img src="assets/images/others/app.png" alt=""></div>--}}
                    {{--</div>--}}
                    {{--<!--Download Content end-->--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Download apps section end-->--}}

    {{--<!--Services section start-->--}}
    {{--<div class="service-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Our Services</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row row-30 align-items-center">--}}
                {{--<div class="col-lg-5 col-12 mb-30">--}}
                    {{--<div class="property-slider-2">--}}
                        {{--<div class="property-2">--}}
                            {{--<div class="property-inner">--}}
                                {{--<a href="single-properties.html" class="image"><img src="assets/images/property/property-13.jpg" alt=""></a>--}}
                                {{--<div class="content">--}}
                                    {{--<h4 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h4>--}}
                                    {{--<span class="location">568 E 1st Ave, Miami</span>--}}
                                    {{--<h4 class="type">Rent <span>$550 <span>Month</span></span></h4>--}}
                                    {{--<ul>--}}
                                        {{--<li>6 Bed</li>--}}
                                        {{--<li>4 Bath</li>--}}
                                        {{--<li>3 Garage</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="property-2">--}}
                            {{--<div class="property-inner">--}}
                                {{--<a href="single-properties.html" class="image"><img src="assets/images/property/property-14.jpg" alt=""></a>--}}
                                {{--<div class="content">--}}
                                    {{--<h4 class="title"><a href="single-properties.html">Marvel de Villa</a></h4>--}}
                                    {{--<span class="location">450 E 1st Ave, New Jersey</span>--}}
                                    {{--<h4 class="type">Rent <span>$550 <span>Month</span></span></h4>--}}
                                    {{--<ul>--}}
                                        {{--<li>6 Bed</li>--}}
                                        {{--<li>4 Bath</li>--}}
                                        {{--<li>3 Garage</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 col-12">--}}
                    {{--<div class="row row-20">--}}

                        {{--<!--Service start-->--}}
                        {{--<div class="col-md-6 col-12 mb-30">--}}
                            {{--<div class="service">--}}
                                {{--<div class="service-inner">--}}
                                    {{--<div class="head">--}}
                                        {{--<div class="icon"><img src="assets/images/service/service-1.png" alt=""></div>--}}
                                        {{--<h4>Buy Property</h4>--}}
                                    {{--</div>--}}
                                    {{--<div class="content">--}}
                                        {{--<p>Khonike - Real Estate Bootstrap 4 Template best theme for elit, seddo eiumod tempor dolor sit.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--Service end-->--}}

                        {{--<!--Service start-->--}}
                        {{--<div class="col-md-6 col-12 mb-30">--}}
                            {{--<div class="service">--}}
                                {{--<div class="service-inner">--}}
                                    {{--<div class="head">--}}
                                        {{--<div class="icon"><img src="assets/images/service/service-2.png" alt=""></div>--}}
                                        {{--<h4>Sale Property</h4>--}}
                                    {{--</div>--}}
                                    {{--<div class="content">--}}
                                        {{--<p>Khonike - Real Estate Bootstrap 4 Template best theme for elit, seddo eiumod tempor dolor sit.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--Service end-->--}}

                        {{--<!--Service start-->--}}
                        {{--<div class="col-md-6 col-12 mb-30">--}}
                            {{--<div class="service">--}}
                                {{--<div class="service-inner">--}}
                                    {{--<div class="head">--}}
                                        {{--<div class="icon"><img src="assets/images/service/service-3.png" alt=""></div>--}}
                                        {{--<h4>Rent Property</h4>--}}
                                    {{--</div>--}}
                                    {{--<div class="content">--}}
                                        {{--<p>Khonike - Real Estate Bootstrap 4 Template best theme for elit, seddo eiumod tempor dolor sit.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--Service end-->--}}

                        {{--<!--Service start-->--}}
                        {{--<div class="col-md-6 col-12 mb-30">--}}
                            {{--<div class="service">--}}
                                {{--<div class="service-inner">--}}
                                    {{--<div class="head">--}}
                                        {{--<div class="icon"><img src="assets/images/service/service-4.png" alt=""></div>--}}
                                        {{--<h4>Mortgage Property</h4>--}}
                                    {{--</div>--}}
                                    {{--<div class="content">--}}
                                        {{--<p>Khonike - Real Estate Bootstrap 4 Template best theme for elit, seddo eiumod tempor dolor sit.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--Service end-->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Services section end-->--}}

    {{--<!--Funfact Section start-->--}}
    {{--<div class="funfact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20" style="background-image: url(assets/images/bg/cta-bg.jpg)">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<!--Funfact start-->--}}
                {{--<div class="single-fact col-lg-3 col-6 mb-30">--}}
                    {{--<div class="inner">--}}
                        {{--<div class="head">--}}
                            {{--<i class="pe-7s-home"></i>--}}
                            {{--<h3 class="counter">854</h3>--}}
                        {{--</div>--}}
                        {{--<p>Complete Project</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Funfact end-->--}}

                {{--<!--Funfact start-->--}}
                {{--<div class="single-fact col-lg-3 col-6 mb-30">--}}
                    {{--<div class="inner">--}}
                        {{--<div class="head">--}}
                            {{--<i class="pe-7s-graph3"></i>--}}
                            {{--<h3 class="counter">854</h3>--}}
                        {{--</div>--}}
                        {{--<p>Property Sold</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Funfact end-->--}}

                {{--<!--Funfact start-->--}}
                {{--<div class="single-fact col-lg-3 col-6 mb-30">--}}
                    {{--<div class="inner">--}}
                        {{--<div class="head">--}}
                            {{--<i class="pe-7s-users"></i>--}}
                            {{--<h3 class="counter">854</h3>--}}
                        {{--</div>--}}
                        {{--<p>Happy Clients</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Funfact end-->--}}

                {{--<!--Funfact start-->--}}
                {{--<div class="single-fact col-lg-3 col-6 mb-30">--}}
                    {{--<div class="inner">--}}
                        {{--<div class="head">--}}
                            {{--<i class="pe-7s-medal"></i>--}}
                            {{--<h3 class="counter">854</h3>--}}
                        {{--</div>--}}
                        {{--<p>Awards Win</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Funfact end-->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Funfact Section end-->--}}

    {{--<!--Agent Section start-->--}}
    {{--<div class="agent-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Our Agents</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}

                {{--<!--Agent satrt-->--}}
                {{--<div class="col-lg-3 col-sm-6 col-12 mb-30">--}}
                    {{--<div class="agent">--}}
                        {{--<div class="image">--}}
                            {{--<a class="img" href="agent-details.html"><img src="assets/images/agent/agent-1.jpg" alt=""></a>--}}
                            {{--<div class="social">--}}
                                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<h4 class="title"><a href="agent-details.html">Donald Palmer</a></h4>--}}
                            {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                            {{--<a href="#" class="email">info@example.com</a>--}}
                            {{--<span class="properties">5 Properties</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Agent end-->--}}

                {{--<!--Agent satrt-->--}}
                {{--<div class="col-lg-3 col-sm-6 col-12 mb-30">--}}
                    {{--<div class="agent">--}}
                        {{--<div class="image">--}}
                            {{--<a class="img" href="agent-details.html"><img src="assets/images/agent/agent-2.jpg" alt=""></a>--}}
                            {{--<div class="social">--}}
                                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<h4 class="title"><a href="agent-details.html">Sean Hamilton</a></h4>--}}
                            {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                            {{--<a href="#" class="email">info@example.com</a>--}}
                            {{--<span class="properties">2 Properties</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Agent end-->--}}

                {{--<!--Agent satrt-->--}}
                {{--<div class="col-lg-3 col-sm-6 col-12 mb-30">--}}
                    {{--<div class="agent">--}}
                        {{--<div class="image">--}}
                            {{--<a class="img" href="agent-details.html"><img src="assets/images/agent/agent-3.jpg" alt=""></a>--}}
                            {{--<div class="social">--}}
                                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<h4 class="title"><a href="agent-details.html">Christine Gilbert</a></h4>--}}
                            {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                            {{--<a href="#" class="email">info@example.com</a>--}}
                            {{--<span class="properties">4 Properties</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Agent end-->--}}

                {{--<!--Agent satrt-->--}}
                {{--<div class="col-lg-3 col-sm-6 col-12 mb-30">--}}
                    {{--<div class="agent">--}}
                        {{--<div class="image">--}}
                            {{--<a class="img" href="agent-details.html"><img src="assets/images/agent/agent-4.jpg" alt=""></a>--}}
                            {{--<div class="social">--}}
                                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<h4 class="title"><a href="agent-details.html">Jason Patel</a></h4>--}}
                            {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                            {{--<a href="#" class="email">info@example.com</a>--}}
                            {{--<span class="properties">2 Properties</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Agent end-->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Agent Section end-->--}}

    {{--<!--Testimonial Section start-->--}}
    {{--<div class="testimonial-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>What Client's Say</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}

                {{--<!--Review start-->--}}
                {{--<div class="review-slider section">--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-1.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>John Carlson - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-2.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>Virginia Henry - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-3.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>Emma Romero - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-4.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>Russell Ortiz - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-5.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>Carol Palmer - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="review col">--}}
                        {{--<div class="review-inner">--}}
                            {{--<div class="image"><img src="assets/images/review/review-6.jpg" alt=""></div>--}}
                            {{--<div class="content">--}}
                                {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit.</p>--}}
                                {{--<h6>David Herrera - <span>CEO</span></h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<!--Review end-->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Testimonial Section end-->--}}

    {{--<!--Brand section start-->--}}
    {{--<div class="brand-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Our Partners</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}

                {{--<!--Brand Slider start-->--}}
                {{--<div class="brand-carousel section">--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-1.png" alt=""></div>--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-2.png" alt=""></div>--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-3.png" alt=""></div>--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-4.png" alt=""></div>--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-5.png" alt=""></div>--}}
                    {{--<div class="brand col"><img src="assets/images/brands/brand-6.png" alt=""></div>--}}
                {{--</div>--}}
                {{--<!--Brand Slider end-->--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Brand section end-->--}}
    @endforeach
@stop

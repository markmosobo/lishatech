@extends('branch')

@section('title',$plot->plot_title)

@section('content')

    <!--New property section start-->
    <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 order-1 order-lg-2 mb-sm-50 mb-xs-50">
                    <div class="row">

                        <!--Property start-->
                        <div class="single-property col-12 mb-50">
                            <div class="property-inner">

                                <div class="head">
                                    <div class="left">
                                        <h1 class="title">{{$plot->plot_title}}</h1>
                                        <span class="location"><img src="{{asset('assets/images/icons/marker.png')}}" alt="">{{$plot->location}}</span>
                                    </div>
                                    <div class="right">
                                        <div class="type-wrap">
                                            <span class="price">Ksh. {{$plot->price}}</span>
                                            <span class="type">For Sale</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="image mb-30">
                                    <img src="{{asset($plot->image_path)}}" alt="">
                                </div>

                                <div class="content">

                                    <h3>Description</h3>

                                    <p>{{$plot->description}}</p>

                                    {{--<div class="row mt-30 mb-30">--}}

                                        {{--<div class="col-md-5 col-12 mb-xs-30">--}}
                                            {{--<h3>Condition</h3>--}}
                                            {{--<ul class="feature-list">--}}
                                                {{--<li><div class="image"><img src="assets/images/icons/area.png" alt=""></div>Area 550 sqft</li>--}}
                                                {{--<li><div class="image"><img src="assets/images/icons/bed.png" alt=""></div>Bedroom 6</li>--}}
                                                {{--<li><div class="image"><img src="assets/images/icons/bath.png" alt=""></div>Bathroom 4</li>--}}
                                                {{--<li><div class="image"><img src="assets/images/icons/parking.png" alt=""></div>Garage 2</li>--}}
                                                {{--<li><div class="image"><img src="assets/images/icons/kitchen.png" alt=""></div>Kitchen 2</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-7 col-12">--}}
                                            {{--<h3>Amenities</h3>--}}
                                            {{--<ul class="amenities-list">--}}
                                                {{--<li>Air Conditioning</li>--}}
                                                {{--<li>Bedding</li>--}}
                                                {{--<li>Balcony</li>--}}
                                                {{--<li>Cable TV</li>--}}
                                                {{--<li>Internet</li>--}}
                                                {{--<li>Parking</li>--}}
                                                {{--<li>Lift</li>--}}
                                                {{--<li>Pool</li>--}}
                                                {{--<li>Dishwasher</li>--}}
                                                {{--<li>Toaster</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col-12 mb-30">--}}
                                            {{--<h3>Video</h3>--}}
                                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                                {{--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8CbvItGX7Vk"></iframe>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12">--}}
                                            {{--<h3>Location</h3>--}}
                                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                                {{--<div id="single-property-map" class="embed-responsive-item google-map" data-lat="40.740178" data-Long="-74.190194"></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                </div>
                            </div>
                        </div>
                        <!--Property end-->

                        {{--<!--Comment start-->--}}
                        {{--<div class="comment-wrap col-12">--}}
                            {{--<h3>3 Feedback</h3>--}}

                            {{--<ul class="comment-list">--}}
                                {{--<li>--}}
                                    {{--<div class="comment">--}}
                                        {{--<div class="image"><img src="assets/images/review/review-1.jpg" alt=""></div>--}}
                                        {{--<div class="content">--}}
                                            {{--<h5>Alvaro Santos</h5>--}}
                                            {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                                {{--<span class="time">10 August, 2018  |  10 Min ago</span>--}}
                                                {{--<a href="#" class="reply">reply</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="decs">--}}
                                                {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<ul class="child-comment">--}}
                                        {{--<li>--}}
                                            {{--<div class="comment">--}}
                                                {{--<div class="image"><img src="assets/images/review/review-2.jpg" alt=""></div>--}}
                                                {{--<div class="content">--}}
                                                    {{--<h5>Silvia Anderson</h5>--}}
                                                    {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                                        {{--<span class="time">10 August, 2018  |  25 Min ago</span>--}}
                                                        {{--<a href="#" class="reply">reply</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="decs">--}}
                                                        {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="comment">--}}
                                        {{--<div class="image"><img src="assets/images/review/review-3.jpg" alt=""></div>--}}
                                        {{--<div class="content">--}}
                                            {{--<h5>Nicolus Christopher</h5>--}}
                                            {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                                {{--<span class="time">10 August, 2018  |  35 Min ago</span>--}}
                                                {{--<a href="#" class="reply">reply</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="decs">--}}
                                                {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}

                            {{--<h3>Leave a Feedback</h3>--}}

                            {{--<div class="comment-form">--}}
                                {{--<form action="#">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Name"></div>--}}
                                        {{--<div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>--}}
                                        {{--<div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>--}}
                                        {{--<div class="col-12"><button class="btn">send now</button></div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<!--Comment end-->--}}

                    </div>
                </div>

                <div class="col-lg-4 col-12 order-2 order-lg-1 pr-30 pr-sm-15 pr-xs-15">

                    {{--<!--Sidebar start-->--}}
                    {{--<div class="sidebar">--}}
                        {{--<h4 class="sidebar-title"><span class="text">Search Property</span><span class="shape"></span></h4>--}}


                        {{--<!--Property Search start-->--}}
                        {{--<div class="property-search sidebar-property-search">--}}

                            {{--<form action="#">--}}

                                {{--<div>--}}
                                    {{--<input type="text" placeholder="Location">--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<select class="nice-select">--}}
                                        {{--<option>All Cities</option>--}}
                                        {{--<option>Athina</option>--}}
                                        {{--<option>Austin</option>--}}
                                        {{--<option>Baytown</option>--}}
                                        {{--<option>Brampton</option>--}}
                                        {{--<option>Cedar Hill</option>--}}
                                        {{--<option>Chester</option>--}}
                                        {{--<option>Chicago</option>--}}
                                        {{--<option>Coleman</option>--}}
                                        {{--<option>Corpus Christi</option>--}}
                                        {{--<option>Dallas</option>--}}
                                        {{--<option>distrito federal</option>--}}
                                        {{--<option>Fayetteville</option>--}}
                                        {{--<option>Galveston</option>--}}
                                        {{--<option>Jersey City</option>--}}
                                        {{--<option>Los Angeles</option>--}}
                                        {{--<option>Midland</option>--}}
                                        {{--<option>New York</option>--}}
                                        {{--<option>Odessa</option>--}}
                                        {{--<option>Reno</option>--}}
                                        {{--<option>San Angelo</option>--}}
                                        {{--<option>San Antonio</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<select class="nice-select">--}}
                                        {{--<option>For Rent</option>--}}
                                        {{--<option>For Sale</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<select class="nice-select">--}}
                                        {{--<option>Type</option>--}}
                                        {{--<option>Apartment</option>--}}
                                        {{--<option>Cafe</option>--}}
                                        {{--<option>House</option>--}}
                                        {{--<option>Restaurant</option>--}}
                                        {{--<option>Store</option>--}}
                                        {{--<option>Villa</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<select class="nice-select">--}}
                                        {{--<option>Bedrooms</option>--}}
                                        {{--<option>1</option>--}}
                                        {{--<option>2</option>--}}
                                        {{--<option>3</option>--}}
                                        {{--<option>4</option>--}}
                                        {{--<option>5</option>--}}
                                        {{--<option>6</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<select class="nice-select">--}}
                                        {{--<option>Bathrooms</option>--}}
                                        {{--<option>1</option>--}}
                                        {{--<option>2</option>--}}
                                        {{--<option>3</option>--}}
                                        {{--<option>4</option>--}}
                                        {{--<option>5</option>--}}
                                        {{--<option>6</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<div id="search-price-range"></div>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<button>search</button>--}}
                                {{--</div>--}}

                            {{--</form>--}}

                        {{--</div>--}}
                        {{--<!--Property Search end-->--}}

                    {{--</div>--}}
                    {{--<!--Sidebar end-->--}}

                    <!--Sidebar start-->
                    <div class="sidebar">
                        <h4 class="sidebar-title"><span class="text">Feature Plots</span><span class="shape"></span></h4>

                        <!--Sidebar Property start-->
                        <div class="sidebar-property-list">

                          @foreach($featplots as $plot)
                            <div class="sidebar-property">
                                <div class="image">
                                    <span class="type">For Sale</span>
                                    <a href="{{url('single-plot/'.$plot->id)}}"><img src="{{asset($plot->image_path)}}" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{url('single-plot/'.$plot->id)}}">{{$plot->plot_title}}</a></h5>
                                    <span class="location"><img src="{{asset('assets/images/icons/marker.png')}}" alt="">{{$plot->location}}</span>
                                    <span class="price">Ksh. {{$plot->price}} </span>
                                </div>
                            </div>
                          @endforeach


                        </div>
                        <!--Sidebar Property end-->

                    </div>

                    {{--<!--Sidebar start-->--}}
                    {{--<div class="sidebar">--}}
                        {{--<h4 class="sidebar-title"><span class="text">Top Agents</span><span class="shape"></span></h4>--}}

                        {{--<!--Sidebar Agents start-->--}}
                        {{--<div class="sidebar-agent-list">--}}

                            {{--<div class="sidebar-agent">--}}
                                {{--<div class="image">--}}
                                    {{--<a href="single-properties.html"><img src="assets/images/agent/agent-1.jpg" alt=""></a>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<h5 class="title"><a href="single-properties.html">Donald Palmer</a></h5>--}}
                                    {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                                    {{--<span class="properties">5 Properties</span>--}}
                                    {{--<div class="social">--}}
                                        {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                        {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                        {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                        {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="sidebar-agent">--}}
                                {{--<div class="image">--}}
                                    {{--<a href="single-properties.html"><img src="assets/images/agent/agent-2.jpg" alt=""></a>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<h5 class="title"><a href="single-properties.html">Sean Hamilton</a></h5>--}}
                                    {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                                    {{--<span class="properties">5 Properties</span>--}}
                                    {{--<div class="social">--}}
                                        {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                        {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                        {{--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="sidebar-agent">--}}
                                {{--<div class="image">--}}
                                    {{--<a href="single-properties.html"><img src="assets/images/agent/agent-3.jpg" alt=""></a>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<h5 class="title"><a href="single-properties.html">Christine Gilbert</a></h5>--}}
                                    {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                                    {{--<span class="properties">5 Properties</span>--}}
                                    {{--<div class="social">--}}
                                        {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                        {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                        {{--<a href="#" class="skype"><i class="fa fa-skype"></i></a>--}}
                                        {{--<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<!--Sidebar Agents end-->--}}

                    {{--</div>--}}

                    {{--<!--Sidebar start-->--}}
                    {{--<div class="sidebar">--}}
                        {{--<h4 class="sidebar-title"><span class="text">Popular Tags</span><span class="shape"></span></h4>--}}

                        {{--<!--Sidebar Tags start-->--}}
                        {{--<div class="sidebar-tags">--}}
                            {{--<a href="#">Houses</a>--}}
                            {{--<a href="#">Real Home</a>--}}
                            {{--<a href="#">Baths</a>--}}
                            {{--<a href="#">Beds</a>--}}
                            {{--<a href="#">Garages</a>--}}
                            {{--<a href="#">Family</a>--}}
                            {{--<a href="#">Real Estates</a>--}}
                            {{--<a href="#">Properties</a>--}}
                            {{--<a href="#">Location</a>--}}
                            {{--<a href="#">Price</a>--}}
                        {{--</div>--}}
                        {{--<!--Sidebar Tags end-->--}}

                    {{--</div>--}}

                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->

@stop
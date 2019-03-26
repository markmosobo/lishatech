@extends('branch')

@section('title','Properties')

@section('content')

    <!--New property section start-->
    <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 order-1 order-lg-2 mb-sm-50 mb-xs-50">
                    <div class="row">

                        <!--Property start-->
                        @foreach($properties as $property)
                        <div class="property-item list col-md-6 col-12 mb-40">
                            <div class="property-inner">
                                <div class="image">
                                    <span class="label">Feature</span>
                                    <a href="{{url('single-property/'.$property->id)}}"><img src="{{asset('assets/images/property/property-2.jpg')}}" alt=""></a>
                                    <ul class="property-feature">
                                        <li>
                                            <span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>
                                        </li>
                                        <li>
                                            <span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>
                                        </li>
                                        <li>
                                            <span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>
                                        </li>
                                        <li>
                                            <span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="left">
                                        <h3 class="title"><a href="single-properties.html">{{$property->property_name}}</a></h3>
                                        <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                    </div>
                                    <div class="right">
                                        <div class="type-wrap">
                                            <span class="price">{{$property->price}}</span>
                                            <span class="type">For Sale</span>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <p>{{$property->description}}</p>
                                    </div>
                                    <a href="{{url('single-property/'.$property->id)}}" class="read-more">View Property</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--Property end-->

                        {{--<!--Property start-->--}}
                        {{--<div class="property-item list col-md-6 col-12 mb-40">--}}
                        {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                        {{--<span class="label">popular</span>--}}
                        {{--<a href="single-properties.html"><img src="assets/images/property/property-3.jpg" alt=""></a>--}}
                        {{--<ul class="property-feature">--}}
                        {{--<li>--}}
                        {{--<span class="area"><img src="assets/images/icons/area.png" alt="">550 SqFt</span>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<span class="bed"><img src="assets/images/icons/bed.png" alt="">6</span>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<span class="bath"><img src="assets/images/icons/bath.png" alt="">4</span>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<span class="parking"><img src="assets/images/icons/parking.png" alt="">3</span>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                        {{--<div class="left">--}}
                        {{--<h3 class="title"><a href="single-properties.html">Ruposi Bangla Cottage</a></h3>--}}
                        {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">215 L AH Rod, California</span>--}}
                        {{--</div>--}}
                        {{--<div class="right">--}}
                        {{--<div class="type-wrap">--}}
                        {{--<span class="price">$550<span>M</span></span>--}}
                        {{--<span class="type">For Rent</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="desc">--}}
                        {{--<p>Ruposi Bangla Cottage is the best theme for elit, sed door dolor sit amet, conse ctetur adipiscing elit, sed do eiud in tempor incididun</p>--}}
                        {{--</div>--}}
                        {{--<a href="single-properties.html" class="read-more">View Property</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--Property end-->--}}


                    </div>

                    <div class="row mt-20">
                        <div class="col">
                            <ul class="page-pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                            </ul>
                        </div>
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
                        <h4 class="sidebar-title"><span class="text">Feature Property</span><span class="shape"></span></h4>

                        <!--Sidebar Property start-->
                        @foreach($properties as $property)
                        <div class="sidebar-property-list">

                            <div class="sidebar-property">
                                <div class="image">
                                    <span class="type">For Rent</span>
                                    <a href="single-properties.html"><img src="assets/images/property/sidebar-property-1.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-properties.html">{{$property->property_name}}</a></h5>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                    <span class="price">{{$property->price}} <span>Month</span></span>
                                </div>
                            </div>

                            {{--<div class="sidebar-property">--}}
                                {{--<div class="image">--}}
                                    {{--<span class="type">For Sale</span>--}}
                                    {{--<a href="single-properties.html"><img src="assets/images/property/sidebar-property-2.jpg" alt=""></a>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<h5 class="title"><a href="single-properties.html">Marvel de Villa</a></h5>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>--}}
                                    {{--<span class="price">$2550</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="sidebar-property">--}}
                                {{--<div class="image">--}}
                                    {{--<span class="type">For Rent</span>--}}
                                    {{--<a href="single-properties.html"><img src="assets/images/property/sidebar-property-3.jpg" alt=""></a>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<h5 class="title"><a href="single-properties.html">Ruposi Bangla Cottage</a></h5>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">215 L AH Rod, California</span>--}}
                                    {{--<span class="price">$550 <span>Month</span></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        </div>
                        @endforeach
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
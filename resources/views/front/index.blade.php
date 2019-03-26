@extends('main')

@section('title','Home')

@section('content')




        <!--Hero Section start-->

        <div class="hero-section section position-relative">
            <!--Hero Slider start-->
            <div class="hero-slider section">

                <!--Hero Item start-->
                @foreach($comproperties as $property)
                <div class="hero-item" style="background-image: url(assets/images/hero/hero-1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-property-content text-center">

                                    <h1 class="title"><a href="{{url('/properties-for-sale-commercial')}}">Commercial Properties For Sale</a></h1>
                                    <span class="location"><img src="assets/images/icons/hero-marker.png" alt=""> {{$property->address}}</span>
                                    <div class="type-wrap">
                                        <a href="{{url('single-property/'.$property->id)}}">
                                        <span class="type">For Sale</span>
                                        </a>
                                        <span class="price">Ksh. {{$property->price}} </span>
                                    </div>
                                    {{--<ul class="property-feature">--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-area.png" alt=""><span>550 SqFt</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-bed.png" alt=""><span>6 Bed</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-bath.png" alt=""><span>4 Bath</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-parking.png" alt=""><span>3 Garage</span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}


                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Hero Item end-->

                <!--Hero Item start-->
                @foreach($resproperties as $property)
                <div class="hero-item" style="background-image: url(assets/images/hero/hero-3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-property-content text-center">

                                    <h1 class="title"><a href="{{url('/properties-for-sale-residential')}}">Residential Properties For Sale</a></h1>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt=""><img src="assets/images/icons/hero-marker.png" alt=""> {{$property->address}}</span>
                                    <div class="type-wrap">
                                        <span class="type">For Rent</span>
                                        <span class="price">Ksh. {{$property->rent}} </span>
                                    </div>
                                    {{--<ul class="property-feature">--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-area.png" alt=""><span>550 SqFt</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-bed.png" alt=""><span>6 Bed</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-bath.png" alt=""><span>4 Bath</span>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<img src="assets/images/icons/hero-parking.png" alt=""><span>3 Garage</span>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}


                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Hero Item end-->

            </div>
            <!--Hero Slider end-->
        </div>

        <!--Hero Section end-->





    {{--<!--Search Section section start-->--}}
    {{--<div class="search-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Find Your Home</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}
                {{--<div class="col">--}}

                    {{--<!--Property Search start-->--}}
                    {{--<div class="property-search">--}}

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
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Search Section section end-->--}}

    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection-->
        @foreach($aboutus as $about)
    <div class="feature-section feature-section-border-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25 align-items-center">

                <!--Feature Image start-->
                {{--<div class="col-lg-5 col-12 order-1 order-lg-2 mb-40">--}}
                    {{--<div class="feature-image"><img src="assets/images/others/feature.png" alt=""></div>--}}
                {{--</div>--}}
                <!--Feature Image end-->

                <div class="col-lg-7 col-12 order-2 order-lg-1 mb-40">

                    <div class="row">
                        <div class="col">
                            <div class="about-content">
                                <h3>Welcome to <span>{{config('app.name')}} Investments Limited</span></h3>
                                <h1>We Always Provide Priority to Our Customer</h1>
                                <p>{{$about->description}}</p>

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
        @endforeach
    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection end-->

    <!--Feature property section start-->
    <div class="property-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Properties On Sale</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">

                <!--Property Slider start-->
                <div class="property-carousel section">

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-1.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<span class="label">Feature</span>--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-2.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Marvel de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$2550</span>--}}
                                        {{--<span class="type">For Sale</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    <!--Property start-->
                        @foreach($saleproperties as $property)
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <span class="label">{{$property->status}}</span>
                                <a href="single-properties.html"><img src="assets/images/property/property-3.jpg" alt=""></a>
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
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">{{$property->property_name}}</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">Ksh. {{$property->price}}</span>
                                        <span class="type">For Sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    <!--Property end-->

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-4.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">MayaKanon de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 EA 1st Ave, Washington</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-5.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Azorex de South Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">668 L 2nd Ave, Boston</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$2550</span>--}}
                                        {{--<span class="type">For Sale</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<span class="label">Feature</span>--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-6.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Radison de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 1st Ave, New Yourk</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                </div>
                <!--Property Slider end-->

            </div>

        </div>
    </div>
    <!--Feature property section end-->

    <!--Feature property section start-->
    <div class="property-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Properties To Rent</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">

                <!--Property Slider start-->
                <div class="property-carousel section">

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-1.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<span class="label">Feature</span>--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-2.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Marvel de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$2550</span>--}}
                                        {{--<span class="type">For Sale</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    <!--Property start-->
                        @foreach($rentproperties as $property)
                    <div class="property-item col">
                        <div class="property-inner">
                            <div class="image">
                                <span class="label">{{$property->status}}</span>
                                <a href="{{url('single-property/'.$property->id)}}"><img src="assets/images/property/property-3.jpg" alt=""></a>
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
                            </div>
                            <div class="content">
                                <div class="left">
                                    <h3 class="title"><a href="single-properties.html">{{$property->property_name}}</a></h3>
                                    <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                </div>
                                <div class="right">
                                    <div class="type-wrap">
                                        <span class="price">{{$property->rent}}<span>M</span></span>
                                        <span class="type">For Rent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    <!--Property end-->

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-4.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">MayaKanon de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 EA 1st Ave, Washington</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-5.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Azorex de South Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">668 L 2nd Ave, Boston</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$2550</span>--}}
                                        {{--<span class="type">For Sale</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                    {{--<!--Property start-->--}}
                    {{--<div class="property-item col">--}}
                        {{--<div class="property-inner">--}}
                            {{--<div class="image">--}}
                                {{--<span class="label">Feature</span>--}}
                                {{--<a href="single-properties.html"><img src="assets/images/property/property-6.jpg" alt=""></a>--}}
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
                                    {{--<h3 class="title"><a href="single-properties.html">Radison de Villa</a></h3>--}}
                                    {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 1st Ave, New Yourk</span>--}}
                                {{--</div>--}}
                                {{--<div class="right">--}}
                                    {{--<div class="type-wrap">--}}
                                        {{--<span class="price">$550<span>M</span></span>--}}
                                        {{--<span class="type">For Rent</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Property end-->--}}

                </div>
                <!--Property Slider end-->

            </div>

        </div>
    </div>
    <!--Feature property section end-->

    {{--<!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection-->--}}
    {{--<div class="feature-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
        {{--<div class="container">--}}

            {{--<div class="feature-wrap row row-25">--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-piggy"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Low Cost</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-science"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Modern Design</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-display1"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Good Marketing</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-signal"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Free Wifi</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-map"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Easy to Find</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

                {{--<!--Feature start-->--}}
                {{--<div class="col-lg-4 col-sm-6 col-12 mb-50">--}}
                    {{--<div class="feature">--}}
                        {{--<div class="icon"><i class="pe-7s-shield"></i></div>--}}
                        {{--<div class="content">--}}
                            {{--<h4>Reliable</h4>--}}
                            {{--<p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Feature end-->--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection end-->--}}

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

    {{--<!--New property section start-->--}}
    {{--<div class="property-section section pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Newly Added Property</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-1.jpg" alt=""></a>--}}
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
                                {{--<h3 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h3>--}}
                                {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                                {{--<div class="type-wrap">--}}
                                    {{--<span class="price">$550<span>M</span></span>--}}
                                    {{--<span class="type">For Rent</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<span class="label">Feature</span>--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-2.jpg" alt=""></a>--}}
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
                                {{--<h3 class="title"><a href="single-properties.html">Marvel de Villa</a></h3>--}}
                                {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                                {{--<div class="type-wrap">--}}
                                    {{--<span class="price">$2550</span>--}}
                                    {{--<span class="type">For Sale</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
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
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-4.jpg" alt=""></a>--}}
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
                                {{--<h3 class="title"><a href="single-properties.html">MayaKanon de Villa</a></h3>--}}
                                {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 EA 1st Ave, Washington</span>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                                {{--<div class="type-wrap">--}}
                                    {{--<span class="price">$550<span>M</span></span>--}}
                                    {{--<span class="type">For Rent</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-5.jpg" alt=""></a>--}}
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
                                {{--<h3 class="title"><a href="single-properties.html">Azorex de South Villa</a></h3>--}}
                                {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">668 L 2nd Ave, Boston</span>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                                {{--<div class="type-wrap">--}}
                                    {{--<span class="price">$2550</span>--}}
                                    {{--<span class="type">For Sale</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<span class="label">Feature</span>--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-6.jpg" alt=""></a>--}}
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
                                {{--<h3 class="title"><a href="single-properties.html">Radison de Villa</a></h3>--}}
                                {{--<span class="location"><img src="assets/images/icons/marker.png" alt="">12 1st Ave, New Yourk</span>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                                {{--<div class="type-wrap">--}}
                                    {{--<span class="price">$550<span>M</span></span>--}}
                                    {{--<span class="type">For Rent</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--Property end-->--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<!--New property section end-->--}}

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
    {{--<div class="agent-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
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
                {{--<div class="agent-carousel section">--}}

                    {{--<!--Agent satrt-->--}}
                    {{--<div class="col">--}}
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
                    {{--<div class="col">--}}
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
                    {{--<div class="col">--}}
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
                    {{--<div class="col">--}}
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

                    {{--<!--Agent satrt-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="agent">--}}
                            {{--<div class="image">--}}
                                {{--<a class="img" href="agent-details.html"><img src="assets/images/agent/agent-5.jpg" alt=""></a>--}}
                                {{--<div class="social">--}}
                                    {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                    {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                    {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                                    {{--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="agent-details.html">Debra Myers</a></h4>--}}
                                {{--<a href="#" class="phone">(756) 447 5779</a>--}}
                                {{--<a href="#" class="email">info@example.com</a>--}}
                                {{--<span class="properties">3 Properties</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--Agent end-->--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--Agent Section end-->--}}

    {{--<!--News Section start-->--}}
    {{--<div class="news-section section pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
        {{--<div class="container">--}}

            {{--<!--Section Title start-->--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-60 mb-xs-30">--}}
                    {{--<div class="section-title center">--}}
                        {{--<h1>Latest News</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--Section Title end-->--}}

            {{--<div class="row">--}}
                {{--<div class="news-carousel section">--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Duplex Villa with Altra Concept</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Template the best theme for  elit, sed do to eiumod tempor dolor sit amet.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Joint Mortgage: Pros vs. Cons</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Template the best theme for  elit, sed do to eiumod tempor dolor sit amet.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Sean</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Sean</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Dealing with Student Loan Debt</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Template the best theme for  elit, sed do to eiumod tempor dolor sit amet.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-4.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Sean</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Sean</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Bridging the home ownership gap</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Template the best theme for  elit, sed do to eiumod tempor dolor sit amet.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--News Section end-->--}}

    {{--<!--Brand section start-->--}}
    {{--<div class="brand-section section pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
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

@stop

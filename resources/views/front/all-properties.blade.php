@extends('branch')

@section('title','Properties')

@section('content')

    <!--New property section start-->
    <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">

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

                <!--Property start-->
                    @foreach($properties as $property)
                        @if($property->status=='For Sale')
                <div class="property-item col-lg-4 col-md-6 col-12 mb-40">
                    <div class="property-inner">
                        <div class="image">
                            <span class="label">Feature</span>
                            <a href="{{url('single-property/'.$property->id)}}"><img src="assets/images/property/prop.jpg" alt=""></a>
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
                                <h3 class="title"><a href="{{url('single-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
                                <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                            </div>
                            <div class="right">
                                <div class="type-wrap">
                                    <span class="price"> {{$property->price}}M</span>
                                    <span class="type">For Sale</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Property end-->
                        @else

                <!--Property start-->
                <div class="property-item col-lg-4 col-md-6 col-12 mb-40">
                    <div class="property-inner">
                        <div class="image">
                            <span class="label">popular</span>
                            <a href="{{url('single-property/'.$property->id)}}"><img src="assets/images/property/property-3.jpg" alt=""></a>
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
                                <h3 class="title"><a href="{{url('single-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
                                <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                            </div>
                            <div class="right">
                                <div class="type-wrap">
                                    <span class="price">${{$property->price}}<span>M</span></span>
                                    <span class="type">For Rent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        @endif
                    @endforeach
                <!--Property end-->

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

                {{--<!--Property start-->--}}
                {{--<div class="property-item col-lg-4 col-md-6 col-12 mb-40">--}}
                    {{--<div class="property-inner">--}}
                        {{--<div class="image">--}}
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-7.jpg" alt=""></a>--}}
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
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-8.jpg" alt=""></a>--}}
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
                            {{--<a href="single-properties.html"><img src="assets/images/property/property-9.jpg" alt=""></a>--}}
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

            </div>

            {{--<div class="row mt-20">--}}
                {{--<div class="col">--}}
                    {{--<ul class="page-pagination">--}}
                        {{--<li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>--}}
                        {{--<li class="active"><a href="#">01</a></li>--}}
                        {{--<li><a href="#">02</a></li>--}}
                        {{--<li><a href="#">03</a></li>--}}
                        {{--<li><a href="#">04</a></li>--}}
                        {{--<li><a href="#">05</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
    <!--New property section end-->

@stop
@extends('branch')

@section('title','Properties')

@section('content')

    <!--Feature property section start-->
    <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">

                <!--Property Slider start-->
                <div class="property-carousel section" data-row="2">

                    <!--Property for sale commercial start-->
                    @foreach($saleproperties as $property)
                            @if($property->status=='Commercial')
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <span class="label">Popular</span>
                                    <a href="{{url('single-sale-property/'.$property->id)}}"><img src="{{asset($property->image_path)}}" alt=""></a>
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
                                        <h3 class="title"><a href="{{url('single-sale-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
                                        <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                    </div>
                                    <div class="right">
                                        <div class="type-wrap">
                                            <span class="price">{{$property->price}}M</span>
                                            <span class="type">For Sale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Property for sale commercial end-->

                        <!--Property for sale residential start-->
                            @elseif($property->status=='Residential')
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <a href="{{url('single-sale-property/'.$property->id)}}"><img src="{{asset($property->image_path)}}" alt=""></a>
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
                                        <h3 class="title"><a href="{{url('single-sale-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
                                        <span class="location"><img src="assets/images/icons/marker.png" alt="">{{$property->address}}</span>
                                    </div>
                                    <div class="right">
                                        <div class="type-wrap">
                                            <span class="price">{{$property->price}}M</span>
                                            <span class="type">For Sale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                    @endforeach
                    <!--Property  for sale residential end-->

                    <!--Property to rent commercial start-->
                    @foreach($rentproperties as $property)
                        @if($property->status=='Commercial')
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <span class="label">Feature</span>
                                    <a href="{{url('single-rental-property/'.$property->id)}}"><img src="{{asset($property->image_path)}}" alt=""></a>
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
                                        <h3 class="title"><a href="{{url('single-rental-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
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
                        <!--Property to rent commercial end-->

                        <!--Property to rent residential start-->
                        @elseif($property->status=='Residential')
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <span class="label">popular</span>
                                    <a href="{{url('single-rental-property/'.$property->id)}}"><img src="{{asset($property->image_path)}}" alt=""></a>
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
                                        <h3 class="title"><a href="{{url('single-rental-property/'.$property->id)}}">{{$property->property_title}}</a></h3>
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
                        @endif
                    @endforeach
                    <!--Property to rent residential end-->

                </div>
                <!--Property Slider end-->

            </div>

        </div>
    </div>
    <!--Feature property section end-->

@stop
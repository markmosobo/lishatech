@extends('branch')

@section('title','Services')

@section('content')

    <!--Services section start-->
    <div class="service-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row row-30 align-items-center">
                <div class="col-lg-5 col-12 mb-30">
                    <div class="property-slider-2">
                        @foreach($properties as $property)
                        <div class="property-2">
                            <div class="property-inner">
                                <a href="{{url('single-sale-property/'.$property->id)}}" class="image"><img src="{{asset($property->image_path)}}" alt=""></a>
                                <div class="content">
                                    <h4 class="title"><a href="{{url('single-sale-property/'.$property->id)}}">{{$property->property_title}}</a></h4>
                                    <span class="location">{{$property->address}}</span>
                                    <h4 class="type">@if($property->status=='For Rent')
                                            Rent
                                        <span>{{$property->price}} <span>Month</span></span></h4>
                                                    @else
                                                        Sale
                                        <span>Ksh. {{$property->price}}M</span>
                                                    @endif
                                    {{--<ul>--}}
                                        {{--<li>6 Bed</li>--}}
                                        {{--<li>4 Bath</li>--}}
                                        {{--<li>3 Garage</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row row-20">

                        <!--Service start-->
                        <div class="col-md-6 col-12 mb-30">
                            <div class="service">
                                <div class="service-inner">
                                    <div class="head">
                                        <div class="icon"><img src="{{asset('assets/images/service/service-1.png')}}" alt=""></div>
                                        <h4>Property Sales</h4>
                                    </div>
                                    <div class="content">
                                        <p>Assist in sound property disposal options<br>
                                            Identify and source for credible purchasers<br>
                                            Assist in purchase negotiations</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Service end-->

                        <!--Service start-->
                        <div class="col-md-6 col-12 mb-30">
                            <div class="service">
                                <div class="service-inner">
                                    <div class="head">
                                        <div class="icon"><img src="{{asset('assets/images/service/service-2.png')}}" alt=""></div>
                                        <h4>Property Letting</h4>
                                    </div>
                                    <div class="content">
                                        <p>Identify credible tenants for various categories of properties offered for rent<br>
                                            Advise on feasible rental returns<br>
                                            Negotiation of secure leases</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Service end-->

                        <!--Service start-->
                        <div class="col-md-6 col-12 mb-30">
                            <div class="service">
                                <div class="service-inner">
                                    <div class="head">
                                        <div class="icon"><img src="{{asset('assets/images/service/service-3.png')}}" alt=""></div>
                                        <h4>Property Development Consultancy</h4>
                                    </div>
                                    <div class="content">
                                        <p>Identify suitable real estate for development<br>
                                            Identify and connect suitable partners for joint ven­ture property development<br>
                                            Assist in Project management during development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Service end-->

                        <!--Service start-->
                        <div class="col-md-6 col-12 mb-30">
                            <div class="service">
                                <div class="service-inner">
                                    <div class="head">
                                        <div class="icon"><img src="{{asset('assets/images/service/service-4.png')}}" alt=""></div>
                                        <h4>Rental Assessment</h4>
                                    </div>
                                    <div class="content">
                                        <p>We do professional rental assessments for both commercial and residential
                                            properties and advice clients accordingly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Service end-->


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Services section end-->


    @stop

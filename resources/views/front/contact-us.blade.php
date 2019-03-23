@extends('branch')

@section('title','Contacts')

@section('content')
    @foreach($contacts as $contact)
    <!--New property section start-->
    <div class="contact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">

                {{--<div class="col-12 mb-50">--}}
                    {{--<div class="embed-responsive embed-responsive-21by9">--}}
                        {{--<div id="contact-map" class="embed-responsive-item contact-map" data-lat="40.730610" data-Long="-73.935242"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-12">
                    <div class="row">

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-map"></i>
                            <h4>address</h4>
                            <p>{{$contact->address}}</p>
                        </div>

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-phone"></i>
                            <h4>Phone</h4>
                            <p><a href="#">{{$contact->phone}}</a><a href="#">{{$contact->alternative_phone}}</a></p>
                        </div>

                        <div class="contact-info col-md-4 col-12 mb-30">
                            <i class="pe-7s-global"></i>
                            <h4>Website</h4>
                            <p><a href="#">{{$contact->email}}</a><a href="{{url('/')}}">www.lishatech.co.ke</a></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->

    <!--New property section start-->
    <div class="contact-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Leave a Message</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">

                <div class="contact-form-wrap col-12">
                    <div class="contact-form">
                        <form id="contact-form" action="http://demo.devitems.com/khonike-v3/khonike/assets/php/mail.php">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-30"><input name="name" type="text" placeholder="Name"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="email" type="email" placeholder="Email"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="phone" type="text" placeholder="Phone"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="subject" type="text" placeholder="Subject"></div>
                                <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-12 text-center"><button class="btn">submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--New property section end-->
    @endforeach
@stop

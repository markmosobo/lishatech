@section('title', 'Recent Sermons')
@extends('front.layouts.app')
@section('content')

    <div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>@yield('title')</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">@yield('title')</li>
            </ol>
        </div>
    </div>



            <!-- Start Body Content -->
            <div class="main" role="main">
                <div id="content" class="content full">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="content-col">
                                <ul class="isotope-grid">
                                    <div class="row">
                                        @if(count($sermons))
                                            @foreach($sermons as $sermon)
                                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                                            <div class="grid-item-inner">
                                                <a href="#" class="media-box">
                                                    <img src="#" alt="">
                                                </a>
                                                <div class="grid-content">
                                                    <span class="label label-primary">{{date('M',strtotime($sermon->sermon_date))}}
                                                        {{\Carbon\Carbon::parse($sermon->sermon_date)->day}},
                                                        {{date('Y',strtotime($sermon->sermon_date))}} –
                                                        {{date('M',strtotime($sermon->sermon_date))}}
                                                        {{\Carbon\Carbon::parse($sermon->sermon_date)->day + 7}},
                                                        {{date('Y',strtotime($sermon->sermon_date))}}</span>
                                                    <h3><a href="{{url('recent-sermon/'.$sermon->id)}}">{{$sermon->title}}</a></h3>
                                                    <p>{{substr(strip_tags($sermon->body),0,150)}}{{strlen($sermon->body) > 100 ? "..." : ""}}</p>
                                                    <a href="{{url('recent-sermon/'.$sermon->id)}}" class="btn btn-primary">View sermon <i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                            @endforeach
                                        @endif
                                        {{--<li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">--}}
                                            {{--<div class="grid-item-inner">--}}
                                                {{--<a href="../sermon-category/what-god-really-wants/index.html" class="media-box">--}}
                                                    {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/02/img_sermon3.jpg" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="grid-content">--}}
                                                    {{--<span class="label label-primary">March 5, 2015 – March 16, 2015</span>                                	<h3><a href="../sermon-category/what-god-really-wants/index.html">What God Really Wants</a></h3>--}}
                                                    {{--<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.&hellip;</p>--}}
                                                    {{--<a href="../sermon-category/what-god-really-wants/index.html" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">--}}
                                            {{--<div class="grid-item-inner">--}}
                                                {{--<a href="../sermon-category/the-temple-of-the-holy-spirit/index.html" class="media-box">--}}
                                                    {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/02/img_sermon5.jpg" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="grid-content">--}}
                                                    {{--<span class="label label-primary">March 5, 2015 – March 16, 2015</span>                                	<h3><a href="../sermon-category/the-temple-of-the-holy-spirit/index.html">The temple of the holy spirit</a></h3>--}}
                                                    {{--<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.&hellip;</p>--}}
                                                    {{--<a href="../sermon-category/the-temple-of-the-holy-spirit/index.html" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">--}}
                                            {{--<div class="grid-item-inner">--}}
                                                {{--<a href="../sermon-category/joy-generosity/index.html" class="media-box">--}}
                                                    {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/02/img_sermon1.jpg" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="grid-content">--}}
                                                    {{--<span class="label label-primary">March 5, 2015 – March 16, 2015</span>                                	<h3><a href="../sermon-category/joy-generosity/index.html">Joy &amp; Generosity</a></h3>--}}
                                                    {{--<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.&hellip;</p>--}}
                                                    {{--<a href="../sermon-category/joy-generosity/index.html" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">--}}
                                            {{--<div class="grid-item-inner">--}}
                                                {{--<a href="../sermon-category/days-like-this/index.html" class="media-box">--}}
                                                    {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/02/img_sermon6.jpg" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="grid-content">--}}
                                                    {{--<span class="label label-primary">March 5, 2015 – March 16, 2015</span>                                	<h3><a href="../sermon-category/days-like-this/index.html">Days like this</a></h3>--}}
                                                    {{--<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.&hellip;</p>--}}
                                                    {{--<a href="../sermon-category/days-like-this/index.html" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">--}}
                                            {{--<div class="grid-item-inner">--}}
                                                {{--<a href="../sermon-category/baptism-take-the-next-step-in-your-journey/index.html" class="media-box">--}}
                                                    {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/img_sermon4.jpg" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="grid-content">--}}
                                                    {{--<span class="label label-primary">March 5, 2015 – March 16, 2015</span>                                	<h3><a href="../sermon-category/baptism-take-the-next-step-in-your-journey/index.html">Baptism - Take the next step in your journey</a></h3>--}}
                                                    {{--<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.&hellip;</p>--}}
                                                    {{--<a href="../sermon-category/baptism-take-the-next-step-in-your-journey/index.html" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Body Content -->

    @stop
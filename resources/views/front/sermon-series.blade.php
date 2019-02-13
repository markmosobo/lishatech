@section('title', 'Sermon Series')
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
                                <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                                    <div class="grid-item-inner">
                                        {{--<a href="../sermon-category/worship-gods-way/index.html" class="media-box">--}}
                                            {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/02/img_sermon2.jpg" alt="">--}}
                                        {{--</a>--}}
                                        <div class="grid-content">
                                            <span class="label label-primary">March 5, 2015 – March 16, 2015</span>
                                            <h3><a href="{{url('singleSermon/{id}')}}">Sermon Title</a></h3>
                                            <p>sermon body goes here&hellip;</p>
                                            <a href="{{url('singleSermon/{id}')}}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
    @stop
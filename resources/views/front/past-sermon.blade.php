@section('title', $sermon->title)
@extends('front.layouts.app')
@section('content')

    <div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>{{$sermon->title}}</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/sermon-list')}}">Past Sermons</a></li>
                <li class="active">{{$sermon->title}}</li>
            </ol>
        </div>
    </div>

    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9" id="content-col">
                        <span class="label label-primary">{{date('M',strtotime($sermon->sermon_date))}}
                            {{\Carbon\Carbon::parse($sermon->sermon_date)->day}},
                            {{date('Y',strtotime($sermon->sermon_date))}} –
                            {{date('M',strtotime($sermon->sermon_date))}}
                            {{\Carbon\Carbon::parse($sermon->sermon_date)->day + 7}},
                            {{date('Y',strtotime($sermon->sermon_date))}}</span>                        <div class="sermon-series-description">
                            <h2 style="text-transform:uppercase;">{{$sermon->title}}</h2>
                            <p> <p>{{$sermon->description}} </p>
                            </p>
                        </div>
                        <ul class="sermons-list">
                            <li class="sermon-item format-standard">
                                <div class="row">
                                    <div class="col-md-5">
                                        {{--<a href="../../index40c6.html?sermon=the-difference-maker" class="media-box"><img src="../../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/echo-hereweare-600x360.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" /></a>                                        <a href="../../index40c6.html?sermon=the-difference-maker" class="basic-link">Watch Sermon</a>--}}
                                    </div>
                                    <div class="col-md-7">
                                        <h3><a href="{{url('single-sermon/{id}')}}">{{$sermon->title}}</a></h3>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> {{date('M',strtotime($sermon->sermon_date))}}
                                            {{\Carbon\Carbon::parse($sermon->sermon_date)->day}}, {{date('Y',strtotime($sermon->sermon_date))}}</span>
                                        <p>{{$sermon->body}}</p>                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 sidebar" id="sidebar-col">
                        <div class="sermon-pastors sidebar-widget widget">
                            <h3>Speaker</h3>
                            <hr class="sm">
                            <ul class="members-list">
                                <li>
                                    <img src="../../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-100x100.jpg"
                                         class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                         srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-100x100.jpg 100w,
                                          https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-150x150.jpg 150w,
                                           https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-210x210.jpg 210w,
                                            https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-180x180.jpg 180w,
                                             https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x300.jpg 300w"
                                         sizes="(max-width: 100px) 100vw, 100px" /><h5>{{$sermon->member_id}}</h5><span class="meta-data">Pastor</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@stop
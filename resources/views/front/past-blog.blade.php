@extends('front.layouts.app')

@section('title','Past Blogs')

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
                    <div class="col-md-12" id="content-col">
                        <div class="row">
                            <ul class="isotope-grid">
                                <li class="col-md-4 col-sm-6 blog-item grid-item format-standard">
                                    <div class="grid-item-inner">
                                        <div class="post-media"><a href="{{url('single-past-blog')}}" class="media-box">
                                                <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-600x400.jpg"
                                                     class="post-thumb wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-600x400.jpg 600w,
                                                      https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></div>                                <div class="grid-content">
                                                <h3 class="post-title"><a href="{{url('single-past-blog')}}">Blog Title</a></h3>
                                                <p>substring goes here...</p>
                                                <span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>
                                        <div class="grid-footer clearfix">
                                            <a href="{{url('single-past-blog')}}#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>
                                            <a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>
                                        </div>
                                    </div>
                                </li>
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-audio">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<audio class="audio-player" src="http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/Miaow-02-Hidden.mp3" type="audio/mp3" controls></audio>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">Audio Blog Title</a></h3>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.--}}
                                                {{--Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>--}}
                                            {{--<a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-gallery">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes" data-speed=5000><ul class="slides"><li class="item format-standard"><a href="{{url('single-past-blog')}}" class="media-box"><img width="600" height="400" src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-600x400.jpg" class="attachment-600x400 size-600x400" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></li></ul></div>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">Gallery Blog Format</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}#comments" class="pull-right meta-data" ><i class="fa fa-comment"></i>5</a>                            		<a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-audio">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71343271&amp;show_artwork=true"></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">Soundcloud audio blog</a></h3>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-video">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe itemprop="video" src="http://www.youtube.com/embed/0elhYaESJkY?wmode=transparent&amp;autoplay=0" width="500" height="281" ></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">A Youtube video blog</a></h3>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.--}}
                                                {{--Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.--}}
                                                {{--Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>--}}
                                            {{--<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span>--}}
                                                {{--<span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>--}}
                                            {{--<a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-video">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<video width="640" height="360" id="player2" poster="../wp-content/uploads/sites/13/2015/01/echo-hereweare-150x150.jpg" class="video-player" controls preload="none"><source type="video/mp4" src="http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/echo-hereweare.mp4" /><source type="video/webm" src="http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/echo-hereweare.webm" /><source type="video/ogg" src="http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/echo-hereweare.ogv" /><object width="640" height="360" type="application/x-shockwave-flash" data="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/themes/AdoreChurch/vendor/mediaelement/flashmediaelement.swf">--}}
                                                    {{--<param name="movie" value="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/themes/AdoreChurch/vendor/mediaelement/flashmediaelement.swf" />--}}
                                                    {{--<param name="flashvars" value="controls=true&amp;file=http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/echo-hereweare.mp4" /><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/echo-hereweare-600x360.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" />--}}
                                                {{--</object>--}}
                                            {{--</video>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">Self Hosted video blog example</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/self-hosted-video-post-example/index.html" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-video">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe src="http://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;autoplay=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="{{url('single-past-blog')}}">A Vimeo video blog</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="{{url('single-past-blog')}}#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            --}}
                                            {{--<a href="{{url('single-past-blog')}}" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

@stop
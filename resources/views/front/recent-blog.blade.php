@extends('front.layouts.app')

@section('title','Recent Blogs')

@section('content')

    <div class="page-header parallax clearfix" style="background-image:url(../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/ph4.jpg); background-color:; height:px;">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>@yield('title')</h2>
                <hr class="sm">
                <span class="subtitle">Way to show what is going on in our church</span>
            </div>
        </div><canvas id="canvas-animation"></canvas>    </div>    <!-- End Page Header -->    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">

            <ol class="breadcrumb">
                <!-- Breadcrumb NavXT 6.2.1 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to Adore Church." href="https://demo.imithemes.com/adore-church-wp" class="home">
                        <span property="name">{{config('app.name')}}</span></a><meta property="position" content="1"></span>
                &gt; <span property="itemListElement" typeof="ListItem"><span property="name">@yield('title')</span><meta property="position" content="2"></span>          	</ol>

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

                                <!--start of blog-->

                                <li class="col-md-4 col-sm-6 blog-item grid-item format-standard">
                                    <div class="grid-item-inner">
                                        <div class="post-media"><a href="../2018/01/24/standard-post-format/index.html" class="media-box"><img src="#" class="post-thumb wp-post-image" alt="" srcset="# 600w, # 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></div>                                <div class="grid-content">
                                            <h3 class="post-title"><a href="../2018/01/24/standard-post-format/index.html">Blog Title</a></h3>                              		<p>Lorem ipsum dolor sit amet,</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>
                                        <div class="grid-footer clearfix">
                                            <a href="../2018/01/24/standard-post-format/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="#" class="basic-link">Read blog</a>
                                        </div>
                                    </div>
                                </li>

                                <!--end of blog-->

                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-audio">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<audio class="audio-player" src="http://imicreationlive.com/adore-church/wp-content/uploads/2015/01/Miaow-02-Hidden.mp3" type="audio/mp3" controls></audio>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="../2018/01/24/self-hosted-audio-post-example/index.html">Self hosted audio post example</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/self-hosted-audio-post-example/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/self-hosted-audio-post-example/index.html" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-gallery">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes" data-speed=5000><ul class="slides"><li class="item format-standard"><a href="../2018/01/24/gallery-post-format/index.html" class="media-box"><img width="600" height="400" src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-600x400.jpg" class="attachment-600x400 size-600x400" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide2-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></li></ul></div>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="../2018/01/24/gallery-post-format/index.html">Gallery Post Format</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/gallery-post-format/index.html#comments" class="pull-right meta-data" ><i class="fa fa-comment"></i>5</a>                            		<a href="../2018/01/24/gallery-post-format/index.html" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-audio">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71343271&amp;show_artwork=true"></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="../2018/01/24/soundcloud-audio-post/index.html">Soundcloud audio post</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/soundcloud-audio-post/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/soundcloud-audio-post/index.html" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-video">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe itemprop="video" src="http://www.youtube.com/embed/0elhYaESJkY?wmode=transparent&amp;autoplay=0" width="500" height="281" ></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="../2018/01/24/a-youtube-video-post/index.html">A Youtube video post</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/a-youtube-video-post/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/a-youtube-video-post/index.html" class="basic-link">Read post</a>--}}
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
                                            {{--<h3 class="post-title"><a href="../2018/01/24/self-hosted-video-post-example/index.html">Self Hosted video post example</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/self-hosted-video-post-example/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/self-hosted-video-post-example/index.html" class="basic-link">Read post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="col-md-4 col-sm-6 blog-item grid-item format-video">--}}
                                    {{--<div class="grid-item-inner">--}}
                                        {{--<div class="post-media">--}}
                                            {{--<iframe src="http://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;autoplay=0&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>                                </div>--}}
                                        {{--<div class="grid-content">--}}
                                            {{--<h3 class="post-title"><a href="../2018/01/24/a-vimeo-video-post/index.html">A Vimeo video post</a></h3>                              		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>                               		<span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../author/imicreation/index.html">Admin</a></span></span>                                </div>--}}
                                        {{--<div class="grid-footer clearfix">--}}
                                            {{--<a href="../2018/01/24/a-vimeo-video-post/index.html#respond" class="pull-right meta-data" ><i class="fa fa-comment"></i>No comments yet</a>                            		<a href="../2018/01/24/a-vimeo-video-post/index.html" class="basic-link">Read post</a>--}}
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
@extends('front.layouts.app')
@section('title','About Us')
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
                        <h2 class="">Welcome to {{ config('app.name') }} Church</h2>
                        <hr class="sm">
                        <h4 class="">Brief History/relevant</h4>
                        <p class="">paragraph goes here...</p>
                        <div class="spacer-50"></div>
                        <div class="row">
                            <div class="col-md-4 " ><div class="icon-box icon-box-style1"><div class="icon-box-head">
                                        <span class="ico"><i class="icon-happy-drop"></i></span>
                                        <h4>Be happy</h4>
                                    </div><p>bible verse goes here...</p>
                                </div></div>
                            <div class="col-md-4 " ><div class="icon-box icon-box-style1"><a href="http://www.imithemes.com/"><div class="icon-box-head">
                                            <span class="ico"><i class="icon-umbrella"></i></span>
                                            <h4>Help others</h4>
                                        </div></a><p>word goes here...</p>
                                </div></div>
                            <div class="col-md-4 " ><div class="icon-box icon-box-style1"><div class="icon-box-head">
                                        <span class="ico"><i class="icon-tshirt"></i></span>
                                        <h4>Pray for a cause</h4>
                                    </div><p>Lorem ipsum dolor sit amet,</p>
                                </div></div>
                        </div>
                        <hr class="fw">
                        <h3>Our Members</h3>
                        <hr class="sm">
                        <div class="row">
                           <!--staff details go here-->
                            <div class="col-md-4 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner">
                                        <a data-toggle="modal" data-target="#team-modal-2736" href="#">
                                            <img src="#" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="# 500w, # 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                        </a>
                                        <div class="grid-content">
                                            <div class="staff-item-name">
                                                <h5><a data-toggle="modal" data-target="#team-modal-2736" href="#" class="">Name</a></h5>
                                                <span class="meta-data">Pastor </span>
                                            </div>
                                            <ul class="social-icons-colored">
                                                <li class="facebook">
                                                    <a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a>
                                                </li>
                                                <li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade team-modal" id="team-modal-2736" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Team Members</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="staff-item">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-6">
                                                        <img src="#"
                                                          class="img-thumbnail wp-post-image" alt=""
                                                          srcset="# 500w,
                                                         # 300w"
                                                          sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Name</h3>
                                                        <span class="meta-data">Pastor </span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end of staff details-->

                            {{--<div class="col-md-4 col-sm-6">--}}
                                {{--<div class="grid-item staff-item format-standard">--}}
                                    {{--<div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2738"--}}
                                      {{--href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">--}}
                                            {{--<div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2738" href="#" class="">Brandon Dean</a></h5><span class="meta-data">Pastor</span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="skype"><a href="http://www.skype.com/en/" target ="_blank"><i class="fa fa-skype"></i></a></li><li class="foursquare"><a href="https://foursquare.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li><li class="twitter"><a href="http://www.twitter.com/" target ="_blank"><i class="fa fa-twitter"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;--}}
                                            {{--</p></div></div>--}}
                                {{--</div>--}}
                                {{--</div><div class="modal fade team-modal" id="team-modal-2738" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                                            {{--<h4 class="modal-title" id="myModalLabel">Team Members</h4>--}}
                                        {{--</div>--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<div class="staff-item">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-5 col-sm-6">--}}
                                                        {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-7 col-sm-6">--}}
                                                        {{--<h3 class="short">Brandon Dean</h3>--}}
                                                        {{--<span class="meta-data">Pastor</span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><div class="col-md-4 col-sm-6">--}}
                                {{--<div class="grid-item staff-item format-standard">--}}
                                    {{--<div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2740" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">--}}
                                            {{--<div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2740" href="#" class="">Riley Wilson</a></h5><span class="meta-data">Pastor</span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="twitter"><a href="https://twitter.com/login" target ="_blank"><i class="fa fa-twitter"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;--}}
                                            {{--</p></div></div>--}}
                                {{--</div>--}}
                            {{--</div><div class="modal fade team-modal" id="team-modal-2740" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                                            {{--<h4 class="modal-title" id="myModalLabel">Team Members</h4>--}}
                                        {{--</div>--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<div class="staff-item">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-5 col-sm-6">--}}
                                                        {{--<img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-7 col-sm-6">--}}
                                                        {{--<h3 class="short">Riley Wilson</h3>--}}
                                                        {{--<span class="meta-data">Pastor</span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div></div>--}}
                        <div class="clearfix"></div>	<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/overview/&amp;t=About%20our%20church" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/overview/&amp;text=About%20our%20church:https://demo.imithemes.com/adore-church-wp/overview/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/overview/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/overview/&amp;t=About%20our%20church&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/overview/&amp;description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/overview/&amp;title=About%20our%20church" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.imithemes.com/adore-church-wp/overview/&amp;title=About%20our%20church&amp;summary=&amp;source=https://demo.imithemes.com/adore-church-wp/overview/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=About our church&amp;body=:https://demo.imithemes.com/adore-church-wp/overview/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
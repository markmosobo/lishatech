@extends('front.layouts.app')

@section('title','Members')

@section('content')

    <!-- End Body Content -->
    <div class="page-header parallax clearfix" style="background-image:
        url(images/slide7.jpg); background-color:; height:px;">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Meet Our @yield('title')</h2>
            </div>
        </div>    </div>    <!-- End Page Header -->    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">

            <ol class="breadcrumb">
                <!-- Breadcrumb NavXT 6.2.1 -->
                <span property="itemListElement" typeof="ListItem">
                  <a property="item" typeof="WebPage" title="Go to Adore Church."
                     href="{{url('/')}}" class="home"><span property="name">{{config('app.name')}}</span>
                  </a><meta property="position" content="1"></span> &gt; <span property="itemListElement"
                                                                               typeof="ListItem"><span property="name">Meet Our @yield('title')</span><meta property="position" content="2"></span>          	</ol>

        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="content-col">
                        <h3>Church Members</h3>
                        <hr class="sm"><div class="row"><div class="col-md-4 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2736" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2736" href="#" class="">Melina Mironescu</a></h5><span class="meta-data">Connections Coordinator </span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2736" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Melina Mironescu</h3>
                                                        <span class="meta-data">Connections Coordinator </span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2738" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2738" href="#" class="">Brandon Dean</a></h5><span class="meta-data">Pastor</span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="skype"><a href="http://www.skype.com/en/" target ="_blank"><i class="fa fa-skype"></i></a></li><li class="foursquare"><a href="https://foursquare.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li><li class="twitter"><a href="http://www.twitter.com/" target ="_blank"><i class="fa fa-twitter"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2738" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Brandon Dean</h3>
                                                        <span class="meta-data">Pastor</span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2740" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2740" href="#" class="">Riley Wilson</a></h5><span class="meta-data">Pastor</span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="twitter"><a href="https://twitter.com/login" target ="_blank"><i class="fa fa-twitter"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2740" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Riley Wilson</h3>
                                                        <span class="meta-data">Pastor</span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div class="spacer-40 "> </div>
                        <h3>Ministries</h3>
                        <hr class="sm"><div class="row"><div class="col-md-3 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2738" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2738" href="#" class="">Brandon Dean</a></h5><span class="meta-data">Pastor</span></div><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="skype"><a href="http://www.skype.com/en/" target ="_blank"><i class="fa fa-skype"></i></a></li><li class="foursquare"><a href="https://foursquare.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li><li class="twitter"><a href="http://www.twitter.com/" target ="_blank"><i class="fa fa-twitter"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2738" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Brandon Dean</h3>
                                                        <span class="meta-data">Pastor</span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2751" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2751" href="#" class="">Kyleigh Lam</a></h5><span class="meta-data"> Events Manager </span></div><ul class="social-icons-colored"><li class="tumblr"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-tumblr"></i></a></li><li class="foursquare"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2751" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Kyleigh Lam</h3>
                                                        <span class="meta-data"> Events Manager </span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2742" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2742" href="#" class="">Ethan Walker</a></h5><span class="meta-data"> Men's Ministries </span></div><ul class="social-icons-colored"><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2742" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Ethan Walker</h3>
                                                        <span class="meta-data"> Men's Ministries </span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-sm-6">
                                <div class="grid-item staff-item format-standard">
                                    <div class="grid-item-inner"><a data-toggle="modal" data-target="#team-modal-2744" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" /></a>	<div class="grid-content">
                                            <div class="staff-item-name"><h5><a data-toggle="modal" data-target="#team-modal-2744" href="#" class="">Elizabeth Hart</a></h5><span class="meta-data"> Events Manager </span></div><ul class="social-icons-colored"><li class="google-plus"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-google-plus"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla&#8230;
                                            </p></div></div>
                                </div>
                            </div><div class="modal fade team-modal" id="team-modal-2744" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3.jpg" class="img-thumbnail wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3.jpg 500w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-300x180.jpg 300w" sizes="(max-width: 500px) 100vw, 500px" />
                                                    </div>
                                                    <div class="col-md-7 col-sm-6">
                                                        <h3 class="short">Elizabeth Hart</h3>
                                                        <span class="meta-data"> Events Manager </span><div class="spacer-10"></div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div class="spacer-40 "> </div><h3>Speakers</h3>
                        <hr class="sm"><ul class="members-list row"><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2736" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff1-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2736" href="#" class="">Melina Mironescu</a></h5><span class="meta-data">Connections Coordinator </span><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul></li><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2738" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff2-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2738" href="#" class="">Brandon Dean</a></h5><span class="meta-data">Pastor</span><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="skype"><a href="http://www.skype.com/en/" target ="_blank"><i class="fa fa-skype"></i></a></li><li class="foursquare"><a href="https://foursquare.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li><li class="twitter"><a href="http://www.twitter.com/" target ="_blank"><i class="fa fa-twitter"></i></a></li></ul></li><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2751" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff4-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2751" href="#" class="">Kyleigh Lam</a></h5><span class="meta-data"> Events Manager </span><ul class="social-icons-colored"><li class="tumblr"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-tumblr"></i></a></li><li class="foursquare"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-foursquare"></i></a></li></ul></li><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2742" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff6-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2742" href="#" class="">Ethan Walker</a></h5><span class="meta-data"> Men's Ministries </span><ul class="social-icons-colored"><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul></li><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2744" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff3-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2744" href="#" class="">Elizabeth Hart</a></h5><span class="meta-data"> Events Manager </span><ul class="social-icons-colored"><li class="google-plus"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-google-plus"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul></li><li class="col-md-2 col-sm-4 col-xs-6"><a data-toggle="modal" data-target="#team-modal-2740" href="#"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-100x100.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-100x100.jpg 100w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-150x150.jpg 150w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-210x210.jpg 210w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-180x180.jpg 180w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/staff5-300x300.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" /></a><h5><a data-toggle="modal" data-target="#team-modal-2740" href="#" class="">Riley Wilson</a></h5><span class="meta-data">Pastor</span><ul class="social-icons-colored"><li class="facebook"><a href="http://www.facebook.com/" target ="_blank"><i class="fa fa-facebook"></i></a></li><li class="flickr"><a href="https://www.flickr.com/" target ="_blank"><i class="fa fa-flickr"></i></a></li><li class="twitter"><a href="https://twitter.com/login" target ="_blank"><i class="fa fa-twitter"></i></a></li><li class="email"><a href="mailto:pastor@mail.com"><i class="fa fa-envelope"></i></a></li></ul></li></ul>
                        <div class="clearfix"></div>	<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;t=Meet%20our%20staff" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;text=Meet%20our%20staff:https://demo.imithemes.com/adore-church-wp/meet-our-staff/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/meet-our-staff/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;t=Meet%20our%20staff&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;title=Meet%20our%20staff" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.imithemes.com/adore-church-wp/meet-our-staff/&amp;title=Meet%20our%20staff&amp;summary=&amp;source=https://demo.imithemes.com/adore-church-wp/meet-our-staff/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=Meet our staff&amp;body=:https://demo.imithemes.com/adore-church-wp/meet-our-staff/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                </div>
                </div>
            </div>
        </div>
    </div>

@stop
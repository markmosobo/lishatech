@extends('front.layouts.app')

@section('title','Gallery')

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
                <ul class="nav nav-pills sort-source" data-sort-id="gallery" data-option-key="filter">
                    <li data-option-value="*" class="active"><a href="#"> Show All</a></li>
                    <li data-option-value=".images"><a href="#">Images</a></li>
                    <li data-option-value=".link"><a href="#">Link</a></li>
                    <li data-option-value=".slideshow"><a href="#">Slideshow</a></li>
                    <li data-option-value=".video"><a href="#">Video</a></li>
                </ul>
                <div class="row">
                    <div class="col-md-12 col-sm-12" id="content-col">
                        <div class="row">
                            <ul class="sort-destination isotope-grid" data-sort-id="gallery">
                                <li class=" col-md-4 col-sm-4 grid-item format-link link ">                    		<div class="grid-item-inner"> <a href="http://www.imithemes.com/" target="_blank" class="media-box"> <img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img5-600x400.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img5-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img5-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /> </a> </div>
                                </li>
                                <li class=" col-md-4 col-sm-4 grid-item format-gallery slideshow ">

                                    <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes" data-speed=5000><ul class="slides"><li class="item"><a href="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img4.jpg" class="magnific-gallery-image"><img width="600" height="400" src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img4-600x400.jpg" class="attachment-600x400 size-600x400" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img4-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img4-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></li><li class="item"><a href="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1.jpg" class="magnific-gallery-image"><img width="600" height="400" src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-600x400.jpg" class="attachment-600x400 size-600x400" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a></li></ul>               	</div>
                                </li>                        <li class=" col-md-4 col-sm-4 grid-item format-video video "><a href="https://vimeo.com/19564018" class="media-box magnific-video"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img5-600x400.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img5-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img5-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                </li>
                                <li class=" col-md-4 col-sm-4 grid-item format-image images "><a href="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img2.jpg" class="media-box magnific-image"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img2-600x400.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img2-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img2-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                </li>
                                <li class=" col-md-4 col-sm-4 grid-item format-image images "><a href="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1.jpg" class="media-box magnific-image"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-600x400.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/gallery_img1-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                </li>
                                <li class=" col-md-4 col-sm-4 grid-item format-image images "><a href="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4.jpg" class="media-box magnific-image"><img src="../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-600x400.jpg" class="attachment-600x400 size-600x400 wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/event_img4-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@stop
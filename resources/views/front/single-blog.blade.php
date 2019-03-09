@extends('front.layouts.app')

@section('title','Single post')

@section('content')
<div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
    <div class="title-subtitle-holder">
        <div class="title-subtitle-holder-inner">
            <h2>{{$blog->blog_title}}</h2>
        </div>
    </div>
</div>
<!-- End Page Header -->
<!-- Breadcrumbs -->
<div class="lgray-bg breadcrumb-cont">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/recent-blog')}}">Blogs</a></li>
            <li class="active">{{$blog->blog_title}}</li>
        </ol>
    </div>
</div>

<!-- Start Body Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-8" id="content-col">
                    <article class="single-post format-standard">
                        <div class="title-row">
                            <a href="#respond" class="comments-go" >
                                <i class="icon-dialogue-text"></i>
                            </a><h2><h3 class="post-title">{{$blog->blog_title}}</h3></h2></div>
                        <div class="meta-data">
                            <span class="meta-data"><span class="meta-post-date"><i class="fa fa-calendar"></i> January 24, 2018</span><span class="meta-post-author"> by <a href="../../../../author/imicreation/index.html">Admin</a></span></span>                            	<span><i class="fa fa-archive"></i> <a href="../../../../category/featured/index.html" >Featured</a>, <a href="../../../../category/general/index.html" >General</a>, <a href="../../../../category/uncategorized/index.html" >Uncategorized</a></span>
                        </div>
                        <div class="post-media">
                            <div class="post-media"><img src="../../../../../../2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-600x400.jpg" class="post-thumb wp-post-image" alt="" srcset="https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-600x400.jpg 600w, https://2ysft2ywl8l3ofc6s43cyjwf-wpengine.netdna-ssl.com/adore-church-wp/wp-content/uploads/sites/13/2015/01/slide1-272x182.jpg 272w" sizes="(max-width: 600px) 100vw, 600px" /></div>                            </div>
                        <div class="post-content">
                            <p>body content goes here...</p>
                        </div>
                        <div class="meta-data post-tags"><i class="fa fa-tags"></i> <a href="../../../../tag/baptism/index.html" rel="tag">Baptism</a>, <a href="../../../../tag/featured/index.html" rel="tag">Featured</a></div>                            								<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;t=Standard%20Post%20Format" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;text=Standard%20Post%20Format:https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;t=Standard%20Post%20Format&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam." target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;title=Standard%20Post%20Format" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/&amp;title=Standard Post Format&amp;summary=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.&amp;source=https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=Standard Post Format&amp;body=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.:https://demo.imithemes.com/adore-church-wp/2018/01/24/standard-post-format/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                                                    </article>
                    <!-- Post Comments -->
                    <section class="post-comments">
                    </section>
                    <div id="respond-wrap" class="clearfix">
                        <section class="post-comment-form">
                            <div id="respond" class="clearfix">
                                <h4 class="title">Post a comment</h4>
                                <div class="cancel-comment-reply">
                                    <a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel Reply</a>		</div>
                                <form action="https://demo.imithemes.com/adore-church-wp/wp-comments-post.php" method="post" id="commentform">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-4 col-sm-4">
                                                <input type="name" class="form-control input-lg" name="author" id="author" value="" size="22" tabindex="1" placeholder="Your name" />
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="email" name="email" class="form-control input-lg" id="email" value="" size="22" tabindex="2" placeholder="Your email" />
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="url" class="form-control input-lg" name="url" id="url" value="" size="22" tabindex="3" placeholder="Website (optional)" /></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea name="comment" id="comment-textarea" class="form-control input-lg" cols="8" rows="4"  tabindex="4" placeholder="Your comment" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input name="submit" type="submit" class="btn btn-primary btn-lg" id="submit" tabindex="5" value="Submit your comment" />
                                                <input type='hidden' name='comment_post_ID' value='25' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>

                </div>
                <!-- Sidebar -->
                <div class="col-md-4" id="sidebar-col">
                    <div id="search-3" class="widget sidebar-widget widget_search"> <form method="get" id="searchform" action="https://demo.imithemes.com/adore-church-wp/">
                            <div class="input-group">
                                <input type="text" class="form-control" name="s" id="s" value="" placeholder="Search Posts..." />
                                <span class="input-group-btn">
            <button type ="submit" name ="submit" class="btn btn-primary"><i class="fa fa-search fa-lg"></i></button>
            </span> </div>
                        </form>
                    </div><div id="categories-3" class="widget sidebar-widget widget_categories"><h3 class="widgettitle">Post Categories</h3>		<ul>
                            <li class="cat-item cat-item-20"><a href="../../../../category/events/index.html" >Events</a> (2)
                            </li>
                            <li class="cat-item cat-item-15"><a href="../../../../category/featured/index.html" >Featured</a> (7)
                            </li>
                            <li class="cat-item cat-item-17"><a href="../../../../category/general/index.html" >General</a> (7)
                            </li>
                            <li class="cat-item cat-item-1"><a href="../../../../category/uncategorized/index.html" >Uncategorized</a> (7)
                            </li>
                            <li class="cat-item cat-item-22"><a href="../../../../category/unity/index.html" >Unity</a> (2)
                            </li>
                            <li class="cat-item cat-item-23"><a href="../../../../category/videos/index.html" >Videos</a> (2)
                            </li>
                        </ul>
                    </div><div id="tag_cloud-2" class="widget sidebar-widget widget_tag_cloud"><h3 class="widgettitle">Post Tags</h3><div class="tagcloud"><a href="../../../../tag/anxiety/index.html" class="tag-cloud-link tag-link-24 tag-link-position-1" style="font-size: 8pt;" aria-label="Anxiety (1 item)">Anxiety</a>
                            <a href="../../../../tag/baptism/index.html" class="tag-cloud-link tag-link-14 tag-link-position-2" style="font-size: 22pt;" aria-label="Baptism (7 items)">Baptism</a>
                            <a href="../../../../tag/featured/index.html" class="tag-cloud-link tag-link-16 tag-link-position-3" style="font-size: 22pt;" aria-label="Featured (7 items)">Featured</a>
                            <a href="../../../../tag/life/index.html" class="tag-cloud-link tag-link-25 tag-link-position-4" style="font-size: 8pt;" aria-label="Life (1 item)">Life</a>
                            <a href="../../../../tag/love/index.html" class="tag-cloud-link tag-link-26 tag-link-position-5" style="font-size: 8pt;" aria-label="Love (1 item)">Love</a>
                            <a href="../../../../tag/storms/index.html" class="tag-cloud-link tag-link-27 tag-link-position-6" style="font-size: 8pt;" aria-label="Storms (1 item)">Storms</a></div>
                    </div><div id="upcoming_events-1" class="widget sidebar-widget widget_upcoming_events"><h3 class="widgettitle">Upcoming Events</h3><div class="events-listing-content smaller-cont"><div class="event-list-item">
                                <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">13</span>
                                        	<span class="event-month">Feb, 19</span>
                                        </span>
                                </div>
                                <div class="event-list-item-info">
                                    <div class="lined-info">
                                        <h4><a href="../../../../index98c7.html?event=water-baptism&amp;event_date=2019-02-13">Water Baptism</a></h4>
                                    </div><span class="meta-data"><i class="fa fa-clock-o"></i> Wednesday, 10:00 am - 2:00 pm</span> <span class="label label-primary">Upcoming</span></span><span class="meta-data"><i class="fa fa-map-marker"></i> State Route H, Saint Louis, MO, USA</span></div>
                            </div><div class="event-list-item">
                                <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">19</span>
                                        	<span class="event-month">Feb, 19</span>
                                        </span>
                                </div>
                                <div class="event-list-item-info">
                                    <div class="lined-info">
                                        <h4><a href="../../../../indexe8cc.html?event=sunday-meet-up&amp;event_date=2019-02-19">Sunday Meet Up</a></h4>
                                    </div><span class="meta-data"><i class="fa fa-clock-o"></i> Tuesday, 11:00 am - 4:00 pm</span> <span class="label label-primary">Upcoming</span></span><span class="meta-data"><i class="fa fa-map-marker"></i> 55 Warren Street, New York, NY 10007, USA</span></div>
                            </div><div class="event-list-item">
                                <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">20</span>
                                        	<span class="event-month">Feb, 19</span>
                                        </span>
                                </div>
                                <div class="event-list-item-info">
                                    <div class="lined-info">
                                        <h4><a href="../../../../index7504.html?event=water-baptism&amp;event_date=2019-02-20">Water Baptism</a></h4>
                                    </div><span class="meta-data"><i class="fa fa-clock-o"></i> Wednesday, 10:00 am - 2:00 pm</span> <span class="label label-primary">Upcoming</span></span><span class="meta-data"><i class="fa fa-map-marker"></i> State Route H, Saint Louis, MO, USA</span></div>
                            </div></div></div>                    </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body Content -->
    @stop
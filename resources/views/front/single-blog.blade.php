@extends('branch')

@section('title',$blog->blog_title)

@section('content')



    <!--News Section start-->
    <div class="news-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-sm-50 mb-xs-50">

                    <div class="single-news-item">
                        <div class="image"><img src="{{asset('assets/images/news/news-details-1.jpg')}}" alt=""></div>
                        <div class="content">
                            <h2 class="title">{{$blog->blog_title}}</h2>
                            <ul class="news-meta">
                                <li>By - <a href="#">{{$blog->author}}</a></li>
                                <li>September 30, 2018</li>
                            </ul>
                            <div class="desc">
                                <p>{{$blog->body}} </p>
                                <blockquote class="blockquote">
                                    <p>We are the  of our customer say’s that they trust us and buy our product without any gitation because they can Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
                                </blockquote>
                                {{--<p>Some of our customer say’s that they trust us and buy our product without any gitation because they can Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>--}}
                            </div>
                            {{--<div class="news-footer">--}}
                                {{--<div class="tags"><span>Tags:</span> <a href="#">Oil</a><a href="#">Beard Oil</a><a href="#">Beard</a></div>--}}
                                {{--<div class="share"><span>Share:</span> <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="news-navigation mb-50">
                        @if($blog->id=='1')
                            <a href="#" class="next-blog"><i class="fa fa-long-arrow-right"></i>Next</a>
                           @elseif($blog->id > '1')
                            <a href="{{url('single-blog/'.$blog->id)}}" class="prev-blog"><i class="fa fa-long-arrow-left"></i>Previous</a>
                             <a href="#" class="next-blog"><i class="fa fa-long-arrow-right"></i>Next</a>
                        @endif
                    </div>

                    {{--<!--Comment start-->--}}
                    {{--<div class="comment-wrap section">--}}
                        {{--<h3>3 Comment</h3>--}}

                        {{--<ul class="comment-list">--}}
                            {{--<li>--}}
                                {{--<div class="comment">--}}
                                    {{--<div class="image"><img src="assets/images/review/review-1.jpg" alt=""></div>--}}
                                    {{--<div class="content">--}}
                                        {{--<h5>Alvaro Santos</h5>--}}
                                        {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                            {{--<span class="time">10 August, 2018  |  10 Min ago</span>--}}
                                            {{--<a href="#" class="reply">reply</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="decs">--}}
                                            {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<ul class="child-comment">--}}
                                    {{--<li>--}}
                                        {{--<div class="comment">--}}
                                            {{--<div class="image"><img src="assets/images/review/review-2.jpg" alt=""></div>--}}
                                            {{--<div class="content">--}}
                                                {{--<h5>Silvia Anderson</h5>--}}
                                                {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                                    {{--<span class="time">10 August, 2018  |  25 Min ago</span>--}}
                                                    {{--<a href="#" class="reply">reply</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="decs">--}}
                                                    {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="comment">--}}
                                    {{--<div class="image"><img src="assets/images/review/review-3.jpg" alt=""></div>--}}
                                    {{--<div class="content">--}}
                                        {{--<h5>Nicolus Christopher</h5>--}}
                                        {{--<div class="d-flex flex-wrap justify-content-between">--}}
                                            {{--<span class="time">10 August, 2018  |  35 Min ago</span>--}}
                                            {{--<a href="#" class="reply">reply</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="decs">--}}
                                            {{--<p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}

                        {{--<h3>Leave a Comment</h3>--}}

                        {{--<div class="comment-form">--}}
                            {{--<form action="#">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Name"></div>--}}
                                    {{--<div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>--}}
                                    {{--<div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>--}}
                                    {{--<div class="col-12"><button class="btn">send now</button></div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<!--Comment end-->--}}

                </div>

                <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 pr-30 pr-sm-15 pr-xs-15">

                    <!--Sidebar start-->
                    <div class="sidebar">
                        <h4 class="sidebar-title"><span class="text">Search</span><span class="shape"></span></h4>

                        <div class="sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="pe-7s-search"></i></button>
                            </form>
                        </div>

                    </div>
                    <!--Sidebar end-->

                    <!--Sidebar start-->
                    <div class="sidebar">
                        <h4 class="sidebar-title"><span class="text">Categiry</span><span class="shape"></span></h4>

                        <ul class="sidebar-list">
                            <li><a href="#">Houses</a></li>
                            <li><a href="#">Real Home</a></li>
                            <li><a href="#">Garages</a></li>
                            <li><a href="#">Real Estates</a></li>
                            <li><a href="#">Properties</a></li>
                            <li><a href="#">Family House</a></li>
                        </ul>

                    </div>
                    <!--Sidebar end-->

                    <!--Sidebar start-->
                    <div class="sidebar">
                        <h4 class="sidebar-title"><span class="text">Popular News</span><span class="shape"></span></h4>

                        <!--Sidebar Property start-->
                        <div class="sidebar-news-list">

                            <div class="sidebar-news">
                                <div class="image">
                                    <a href="news-details.html"><img src="assets/images/news/sidebar-news-1.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="news-details.html">Duplex Villa with Altra Concept</a></h5>
                                    <span class="date">September 30, 2018</span>
                                </div>
                            </div>

                            <div class="sidebar-news">
                                <div class="image">
                                    <a href="news-details.html"><img src="assets/images/news/sidebar-news-2.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="news-details.html">Joint Mortgage: Pros vs. Cons</a></h5>
                                    <span class="date">September 30, 2018</span>
                                </div>
                            </div>

                            <div class="sidebar-news">
                                <div class="image">
                                    <a href="news-details.html"><img src="assets/images/news/sidebar-news-3.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="news-details.html">Dealing with Student Loan Debt</a></h5>
                                    <span class="date">September 30, 2018</span>
                                </div>
                            </div>

                        </div>
                        <!--Sidebar Property end-->

                    </div>

                    {{--<!--Sidebar start-->--}}
                    {{--<div class="sidebar">--}}
                        {{--<h4 class="sidebar-title"><span class="text">Archive</span><span class="shape"></span></h4>--}}

                        {{--<ul class="sidebar-list">--}}
                            {{--<li><a href="#">October 2018</a></li>--}}
                            {{--<li><a href="#">September 2018</a></li>--}}
                            {{--<li><a href="#">August 2018</a></li>--}}
                            {{--<li><a href="#">July 2018</a></li>--}}
                            {{--<li><a href="#">Jun 2018</a></li>--}}
                            {{--<li><a href="#">May 2018</a></li>--}}
                        {{--</ul>--}}

                    {{--</div>--}}
                    {{--<!--Sidebar end-->--}}

                    {{--<!--Sidebar start-->--}}
                    {{--<div class="sidebar">--}}
                        {{--<h4 class="sidebar-title"><span class="text">Popular Tags</span><span class="shape"></span></h4>--}}

                        {{--<!--Sidebar Tags start-->--}}
                        {{--<div class="sidebar-tags">--}}
                            {{--<a href="#">Houses</a>--}}
                            {{--<a href="#">Real Home</a>--}}
                            {{--<a href="#">Baths</a>--}}
                            {{--<a href="#">Beds</a>--}}
                            {{--<a href="#">Garages</a>--}}
                            {{--<a href="#">Family</a>--}}
                            {{--<a href="#">Real Estates</a>--}}
                            {{--<a href="#">Properties</a>--}}
                            {{--<a href="#">Location</a>--}}
                            {{--<a href="#">Price</a>--}}
                        {{--</div>--}}
                        {{--<!--Sidebar Tags end-->--}}

                    {{--</div>--}}

                </div>

            </div>
        </div>
    </div>
    <!--News Section end-->

@stop
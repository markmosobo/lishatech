@extends('branch')

@section('title','Blog')

@section('content')
    <!--News Section start-->
    <div class="news-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">
                <div class="news-carousel section">

                    <!--News start-->
                    @foreach($blogs as $blog)
                    <div class="col">
                        <div class="news">
                            <div class="image">
                                <a href="{{url('single-blog/'.$blog->id)}}"><img src="assets/images/news/news-1.jpg" alt=""></a>
                                <div class="meta-wrap">
                                    <ul class="meta">
                                        <li>By <a href="#">{{$blog->author}}</a></li>
                                        <li>{{date('M',strtotime($blog->created_at))}}
                                            {{\Carbon\Carbon::parse($blog->created_at)->day}},
                                            {{date('Y',strtotime($blog->created_at))}}</li>
                                    </ul>
                                    <ul class="meta back">
                                        <li>By <a href="#">{{$blog->author}}</a></li>
                                        <li>{{date('M',strtotime($blog->created_at))}}
                                            {{\Carbon\Carbon::parse($blog->created_at)->day}},
                                            {{date('Y',strtotime($blog->created_at))}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{url('single-blog/'.$blog->id)}}">{{$blog->blog_title}}</a></h4>
                                <div class="desc">
                                    <p>{{substr($blog->body,0,200)}}{{strlen($blog->body) > 200 ? "..." : ""}}</p>
                                </div>
                                <a href="{{url('single-blog/'.$blog->id)}}" class="readmore">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--News end-->

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Joint Mortgage: Pros vs. Cons</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for  elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit sed do.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Dealing with Student Loan Debt</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for  elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit sed do.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                    {{--<!--News start-->--}}
                    {{--<div class="col">--}}
                        {{--<div class="news">--}}
                            {{--<div class="image">--}}
                                {{--<a href="news-details.html"><img src="assets/images/news/news-4.jpg" alt=""></a>--}}
                                {{--<div class="meta-wrap">--}}
                                    {{--<ul class="meta">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="meta back">--}}
                                        {{--<li>By <a href="#">Donald</a></li>--}}
                                        {{--<li>September 30, 2018</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<h4 class="title"><a href="news-details.html">Bridging the home ownership gap</a></h4>--}}
                                {{--<div class="desc">--}}
                                    {{--<p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for  elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit sed do.</p>--}}
                                {{--</div>--}}
                                {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--News end-->--}}

                </div>
            </div>
        </div>
    </div>
    <!--News Section end-->
@stop

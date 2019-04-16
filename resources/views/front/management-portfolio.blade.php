@extends('branch')

@section('title','Management Portfolio')

@section('content')

    <!--News Section start-->
    <div class="news-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <div class="row">

                <!--News start-->
                @foreach($portfolio as $port)
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="news">
                        <div class="image">
                            <a href="#"><img src="{{asset($port->image_path)}}" alt=""></a>
                            <div class="meta-wrap">
                                {{--<ul class="meta">--}}
                                    {{--<li>By <a href="#">Donald</a></li>--}}
                                    {{--<li>September 30, 2018</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="meta back">--}}
                                    {{--<li>By <a href="#">Donald</a></li>--}}
                                    {{--<li>September 30, 2018</li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">{{$port->property_title}}</a></h4>
                            <div class="desc">
                                <p>{{$port->description}}</p>
                            </div>
                            {{--<a href="news-details.html" class="readmore">Continure Reading</a>--}}
                        </div>
                    </div>
                </div>
                @endforeach
                <!--News end-->


            </div>


        </div>
    </div>
    <!--News Section end-->

@stop

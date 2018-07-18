@extends('layouts.app')
@section("pageTitle",'Un Authorized')
@section("pageSubtitle",'401')
@section("breadcrumbs")
    <li>Home</li>
@endsection
@section('content')
    <section class="content-header">

    </section>
    <div class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> 401</h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> Oops! You are not authorized to access this page.</h3>

                <p>
                    Meanwhile, you may <a href="{{ url('/') }}">return to dashboard</a> or contact the admin.
                </p>

                {{--<form class="search-form">--}}
                    {{--<div class="input-group">--}}
                        {{--<input type="text" name="search" class="form-control" placeholder="Search">--}}

                        {{--<div class="input-group-btn">--}}
                            {{--<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /.input-group -->--}}
                {{--</form>--}}
            </div>
            <!-- /.error-content -->
        </div>
    </div>
@endsection

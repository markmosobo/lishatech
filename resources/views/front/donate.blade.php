@extends('front.layouts.app')
@section('title','Give')
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
                        <h2 class="">Here is how you can give to our church</h2>
                        <hr class="sm">
                        <h4 class="">Aenean vulputate eleifend tellus</h4>
                        <p class="">Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                        <h3 class="">H3 heading style</h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        <h4 class="">H4 heading style</h4>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        <blockquote><p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                            </p></blockquote>
                        <div class="clearfix"></div>	<div class="social-share-bar"><h4><i class="fa fa-share-alt"></i> Share</h4><ul class="social-icons-colored share-buttons-tc share-buttons-squared"><li class="share-title"></li><li class="facebook-share"><a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.imithemes.com/adore-church-wp/donate/&amp;t=Donate" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?source=https://demo.imithemes.com/adore-church-wp/donate/&amp;text=Donate:https://demo.imithemes.com/adore-church-wp/donate/" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li><li class="google-share"><a href="https://plus.google.com/share?url=https://demo.imithemes.com/adore-church-wp/donate/" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li><li class="tumblr-share"><a href="http://www.tumblr.com/share?v=3&amp;u=https://demo.imithemes.com/adore-church-wp/donate/&amp;t=Donate&amp;s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li><li class="pinterest-share"><a href="http://pinterest.com/pin/create/button/?url=https://demo.imithemes.com/adore-church-wp/donate/&amp;description=" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li><li class="reddit-share"><a href="http://www.reddit.com/submit?url=https://demo.imithemes.com/adore-church-wp/donate/&amp;title=Donate" target="_blank" title="Submit to Reddit"><i class="fa fa-reddit"></i></a></li><li class="linkedin-share"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.imithemes.com/adore-church-wp/donate/&amp;title=Donate&amp;summary=&amp;source=https://demo.imithemes.com/adore-church-wp/donate/" target="_blank" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><li class="email-share"><a href="mailto:?subject=Donate&amp;body=:https://demo.imithemes.com/adore-church-wp/donate/" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li></ul>
                        </div>                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<header class="site-header">
    <div class="container for-navi">
        <div class="site-logo">
            <h1>
                <a href="{{url('/')}}">
                    <span class="logo-icon"><i class="fa fa-heart"></i></span>
                    <span class="logo-text">PCEA <span>Gitangu Church</span></span>
                    <span class="logo-tagline"></span>
                </a>
            </h1>
        </div>
        <!-- Main Navigation -->
        <nav class="main-navigation" role="navigation">
            <ul class="sf-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="javascript:void(0)">About us</a>
                    <ul class="dropdown">
                        <li><a href="{{url('about')}}">Overview</a></li>
                        <li><a href="{{url('new-here')}}">New Here?</a></li>
                        <li><a href="{{url('church-staff')}}">Our Members</a></li>
                        <li><a href="{{url('donate')}}">Donate now</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Sermons</a>
                    <ul class="dropdown">
                        <li><a href="#">Sermons</a>
                            <ul class="dropdown">
                                <li><a href="{{url('sermon-series')}}">Sermon Series</a></li>
                                <li><a href="{{url('sermon-list')}}">Past Sermons</a></li>
                                {{--<li><a href="{{url('/singleSermon/{id')}}">Single Sermon</a></li>--}}
                            </ul>
                        </li>
                        <li><a href="{{url('gallery')}}">Gallery</a>
                            {{--<ul class="dropdown">--}}
                                {{--<li><a href="gallery-2cols-filter.html">With Filter</a>--}}
                                    {{--<ul class="dropdown">--}}
                                        {{--<li><a href="gallery-2cols-filter.html">2 Cols</a></li>--}}
                                        {{--<li><a href="gallery-3cols-filter.html">3 Cols</a></li>--}}
                                        {{--<li><a href="gallery-4cols-filter.html">4 Cols</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="gallery-2cols-pagination.html">With Pagination</a>--}}
                                    {{--<ul class="dropdown">--}}
                                        {{--<li><a href="gallery-2cols-pagination.html">2 Cols</a></li>--}}
                                        {{--<li><a href="gallery-3cols-pagination.html">3 Cols</a></li>--}}
                                        {{--<li><a href="gallery-4cols-pagination.html">4 Cols</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="gallery-galleria.html">Galleria Gallery</a></li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Events</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/event-list')}}">Upcoming Events</a></li>
                        <li><a href="{{url('/events_calendar')}}">Recent/Past Events</a></li>
                        {{--<li><a href="{{url('/single/{id}')}}">Single Event</a></li>--}}
                    </ul>
                </li>
                <li class="megamenu"><a href="javascript:void(0)">Mega Menu</a>
                    <ul class="dropdown">
                        <li>
                            <div class="megamenu-container container">
                                <div class="row">
                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <span class="megamenu-sub-title">Put videos</span>
                                        <div class="fw-video">
                                            <iframe src="https://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-5"> <span class="megamenu-sub-title">About Us</span>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                                    </div>
                                    <div class="col-md-3"> <span class="megamenu-sub-title">Use Custom Menus</span>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/about')}}">About Us</a></li>
                                            {{--<li><a href="404.html">404 Error</a></li>--}}
                                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                            {{--<li><a href="typography.html">Typography</a></li>--}}
                                            {{--<li><a href="shortcodes.html">Shortcodes</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Blog</a>
                    <ul class="dropdown">
                        <li><a href="blog-standard.html">Standard Blog</a></li>
                        <li><a href="blog-masonry.html">Masonry Blog</a></li>
                        <li><a href="blog-post.html">Single Post</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
    </div>
</header>
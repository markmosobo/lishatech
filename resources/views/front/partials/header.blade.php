<header class="header header-sticky">
    <div class="header-bottom menu-center">
        <div class="container">
            <div class="row justify-content-between">

                <!--Logo start-->
                <div class="col mt-10 mb-10">
                    <div class="logo">
                        {{--<a href="index.html"><img src="assets/images/logo.png" alt=""></a>--}}
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col d-none d-lg-flex">
                    <nav class="main-menu">
                        <ul>
                            <li class=""><a href="{{url('/')}}">Home</a>
                            </li>
                            <li class=""><a href="{{url('/about-us')}}">About Us</a>
                            <li class=""><a href="{{url('/our-services')}}">Services</a>
                            <li class="has-dropdown"><a href="{{url('/properties')}}">Properties</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">Properties For Sale</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('properties-for-sale-commercial')}}">Commercial</a></li>
                                            <li><a href="{{url('/properties-for-sale-residential')}}">Residential</a></li>
                                            {{--<li><a href="properties-right-sidebar.html">Right Sidebar</a></li>--}}
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Properties To Rent</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/properties-to-rent-commercial')}}">Commercial</a></li>
                                            <li><a href="{{url('/properties-to-rent-residential')}}">Residential</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{url('/plots-for-sale')}}">Plots For Sale</a>
                                        {{--<ul class="sub-menu">--}}
                                        {{--<li><a href="properties-carousel.html">Carousel Single Row</a></li>--}}
                                        {{--<li><a href="properties-carousel2.html">Carousel Double Row</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                                    {{--<li class="has-dropdown"><a href="single-properties.html">Single Properties</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                    {{--<li><a href="single-properties.html">Left Sidebar</a></li>--}}
                                    {{--<li><a href="single-properties-right-sidebar.html">Right Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                            <li class=""><a href="{{url('management-portfolio')}}">  Management Portfolio</a>
                            {{--<li class="has-dropdown"><a href="agent.html">agents</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li class="has-dropdown"><a href="agents.html">Agents Grid</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="agents-3-column.html">Three Column</a></li>--}}
                            {{--<li><a href="agents.html">Four Column</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="has-dropdown"><a href="agents-carousel-3-column.html">Agents Carousel</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="agents-carousel-3-column.html">Three Column</a></li>--}}
                            {{--<li><a href="agents-carousel2-3-column.html">Three Column Double Row</a></li>--}}
                            {{--<li><a href="agents-carousel-4-column.html">Four Column</a></li>--}}
                            {{--<li><a href="agents-carousel2-4-column.html">Four Column Double Row</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="agent-details.html">Agent Details</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="has-dropdown"><a href="agencies.html">Agencies</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="agencies.html">Agencies</a></li>--}}
                            {{--<li><a href="agency-details.html">Agency Details</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            <li class=""><a href="{{url('/contact-us')}}">Contacts</a>
                            <li class=""><a href="{{url('/blog')}}">Blog</a>
                                {{--<ul class="sub-menu">--}}
                                {{--<li><a href="news.html">Default Layout</a></li>--}}
                                {{--<li><a href="news-left-sidebar.html">Left Sidebar</a></li>--}}
                                {{--<li><a href="news-right-sidebar.html">Right Sidebar</a></li>--}}
                                {{--<li><a href="news-carousel.html">Carousel Single Row</a></li>--}}
                                {{--<li><a href="news-carousel2.html">Carousel Double Row</a></li>--}}
                                {{--<li><a href="news-details.html">Details Left Sidebar</a></li>--}}
                                {{--<li><a href="news-details-right-sidebar.html">Details Right Sidebar</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            {{--<li class="has-dropdown"><a href="#">pages</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="about-us.html">About us</a></li>--}}
                            {{--<li><a href="add-properties.html">Add Properties</a></li>--}}
                            {{--<li><a href="contact-us.html">Contact us</a></li>--}}
                            {{--<li><a href="gallery-2-column.html">Gallery 2 Column</a></li>--}}
                            {{--<li><a href="gallery-3-column.html">Gallery 3 Column</a></li>--}}
                            {{--<li><a href="gallery-4-column.html">Gallery 4 Column</a></li>--}}
                            {{--<li><a href="login-register.html">Login & Register</a></li>--}}
                            {{--<li><a href="my-account.html">My Account</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!--User start-->
                <div class="col mr-sm-50 mr-xs-50">
                    {{--<div class="header-user">--}}
                    {{--<a href="login-register.html" class="user-toggle"><i class="pe-7s-user"></i><span>Login or Register</span></a>--}}
                    {{--</div>--}}
                </div>
                <!--User end-->
            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>

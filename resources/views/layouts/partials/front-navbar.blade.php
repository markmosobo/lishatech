<nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom bg-white " role="navigation">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-md-2 pull-left"><a class="logo-light" href="index.html"><img alt="" src="images/logo-light.png" class="logo" /></a><a class="logo-dark" href="index.html"><img alt="" src="images/logo-light.png" class="logo" /></a></div>
            <!-- end logo -->
            <!-- search and cart  -->
            <div class="col-md-2 search-cart-header pull-right">
                <div id="top-search">
                    <!-- search input-->
                    <form method="post" action="#" name="s" class="search-form">
                        <i class="fa fa-search close-search search-button"></i>
                        <input type="text" name="search" class="search-input" placeholder="Search...">
                    </form>
                    <!-- end search input -->
                    <!-- nav search -->
                    <i class="fa fa-search search-button"></i>
                    <div class="subtitle">Search</div>
                    <!-- end nav search -->
                </div>
                <div class="top-cart">
                    <!-- nav shopping bag -->
                    <a href="#" class="shopping-cart">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="subtitle">(1) Items</div>
                    </a>
                    <!-- end nav shopping bag -->
                    <!-- shopping bag content -->
                    <div class="cart-content">
                        <ul class="cart-list">
                            <li>
                                <a title="Remove item" class="remove" href="#">×</a>
                                <a href="#">
                                    <img width="90" height="90" alt="" src="http://placehold.it/90x90">Leather Craft</a>
                                <span class="quantity">1 × <span class="amount">$160</span></span>
                                <a href="#">Edit</a>
                            </li>
                        </ul>
                        <p class="total">Subtotal: <span class="amount">$160</span></p>
                        <p class="buttons">
                            <a href="shop-cart.html" class="btn btn-very-small-white no-margin-bottom margin-seven pull-left no-margin-lr">View Cart</a>
                            <a href="shop-checkout.html" class="btn btn-very-small-white no-margin-bottom margin-seven no-margin-right pull-right">Checkout</a>
                        </p>
                    </div>
                    <!-- end shopping bag content -->
                </div>
            </div>
            <!-- end search and cart  -->
            <!-- toggle navigation -->
            <div class="navbar-header col-sm-8 col-xs-2 pull-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <!-- toggle navigation end -->
            <!-- main menu -->
            <div class="col-md-8 accordion-menu text-right">
                <div class="navbar-collapse collapse">
                    <ul id="accordion" class="nav navbar-nav navbar-right panel-group">
                        <!-- menu item -->
                        <li class=" panel"><a href="{{ url('index') }}" class="">Home <i class="fa fa-angle-down"></i></a>

                        </li>

                        <!-- menu item -->
                        <li class="dropdown panel"><a href="#collapse2" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">One Page <i class="fa fa-angle-down"></i></a>
                            <!-- sub menu -->
                            <ul id="collapse2" class="dropdown-menu mega-menu panel-collapse collapse mega-menu-full">
                                <li class="mega-menu-column col-sm-3">
                                    <!-- sub menu item  -->
                                    <ul>
                                        <li class="dropdown-header">Pre Made Homepage</li>
                                        <li><a href="onepage-bootstrap-slider.html">Home main</a></li>
                                        <li><a href="onepage-fashion.html">Home fashion</a></li>
                                        <li><a href="onepage-architecture.html">Home architecture</a></li>
                                        <li><a href="onepage-spa.html">Home spa</a></li>
                                        <li><a href="onepage-agency.html">Home agency</a></li>
                                        <li><a href="onepage-restaurant.html">Home restaurant</a></li>
                                        <li><a href="onepage-travel-agency.html">Home travel agency</a></li>
                                        <li><a href="onepage-corporate.html">Home corporate</a></li>
                                        <li><a href="onepage-personal.html">Home personal</a></li>
                                        <li><a href="onepage-wedding.html">Home wedding</a></li>
                                        <li><a href="onepage-landing.html">Landing page</a></li>
                                    </ul>
                                    <!-- end sub menu item  -->
                                </li>
                                <li class="mega-menu-column col-sm-3">
                                    <!-- sub menu item  -->
                                    <ul>
                                        <li class="dropdown-header">Parallax Image / Typography</li>
                                        <li><a href="onepage-parallax1.html">Parallax Image - option 1 </a></li>
                                        <li><a href="onepage-parallax2.html">Parallax Image - option 2</a></li>
                                        <li><a href="onepage-parallax3.html">Parallax Image - option 3 </a></li>
                                        <li><a href="onepage-parallax4.html">Parallax Image - option 4</a></li>
                                        <li><a href="onepage-parallax5.html">Parallax Image - option 5</a></li>
                                    </ul>
                                    <!-- end sub menu item  -->
                                </li>
                                <li class="mega-menu-column col-sm-3">
                                    <!-- sub menu item  -->
                                    <ul>
                                        <li class="dropdown-header">Other</li>
                                        <li><a href="onepage-masonry-portfolio.html">Home - masonry portfolio</a></li>
                                        <li><a href="onepage-background-slider.html">Home - background slider</a></li>
                                        <li><a href="onepage-full-screen-video.html">Home - full screen video</a></li>
                                        <li><a href="onepage-text-rotator.html">Home - text rotator</a></li>
                                        <li><a href="onepage-full-width-image.html">Home - full width image</a></li>
                                    </ul>
                                    <!-- end sub menu item  -->
                                </li>
                                <li class="mega-menu-column col-sm-3">
                                    <!-- sub menu item  -->
                                    <ul>
                                        <li class="dropdown-header">Carousel slider</li>
                                        <li><a href="onepage-bootstrap-slider.html">Bootstrap slider - full screen</a></li>
                                        <li><a href="onepage-slider-revolution1.html">Revolution slider - full screen</a></li>
                                        <li><a href="onepage-slider-revolution2.html">Revolution slider - half screen</a></li>
                                        <li><a href="onepage-slider-owl1.html">owl slider - full screen</a></li>
                                        <li><a href="onepage-slider-owl2.html">owl slider - half screen</a></li>
                                    </ul>
                                    <!-- end sub menu item  -->
                                </li>
                            </ul>
                            <!-- end sub menu -->
                        </li>
                        <!-- end menu item -->
                    </ul>
                </div>
            </div>
            <!-- end main menu -->
        </div>
    </div>
</nav>

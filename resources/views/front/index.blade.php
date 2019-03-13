@extends('main')

@section('title','Home')

@section('content')

    <!--Hero Section start-->
    <div class="hero-section section position-relative">

        <!--Hero Slider start-->
        <div class="hero-slider section">

            <!--Hero Item start-->
            <div class="hero-item" style="background-image: url(assets/images/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-property-content text-center">

                                <h1 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h1>
                                <span class="location"><img src="assets/images/icons/hero-marker.png" alt=""> 568 E 1st Ave, Miami</span>
                                <div class="type-wrap">
                                    <span class="type">For Rent</span>
                                    <span class="price">$550 <span>Month</span></span>
                                </div>
                                <ul class="property-feature">
                                    <li>
                                        <img src="assets/images/icons/hero-area.png" alt=""><span>550 SqFt</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-bed.png" alt=""><span>6 Bed</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-bath.png" alt=""><span>4 Bath</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-parking.png" alt=""><span>3 Garage</span>
                                    </li>
                                </ul>


                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

            <!--Hero Item start-->
            <div class="hero-item" style="background-image: url(assets/images/hero/hero-3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-property-content text-center">

                                <h1 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h1>
                                <span class="location"><img src="assets/images/icons/marker.png" alt=""><img src="assets/images/icons/hero-marker.png" alt=""> 568 E 1st Ave, Miami</span>
                                <div class="type-wrap">
                                    <span class="type">For Rent</span>
                                    <span class="price">$550 <span>Month</span></span>
                                </div>
                                <ul class="property-feature">
                                    <li>
                                        <img src="assets/images/icons/hero-area.png" alt=""><span>550 SqFt</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-bed.png" alt=""><span>6 Bed</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-bath.png" alt=""><span>4 Bath</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/hero-parking.png" alt=""><span>3 Garage</span>
                                    </li>
                                </ul>


                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

        </div>
        <!--Hero Slider end-->

    </div>
    <!--Hero Section end-->

    <!--Search Section section start-->
    <div class="search-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">

            <!--Section Title start-->
            <div class="row">
                <div class="col-md-12 mb-60 mb-xs-30">
                    <div class="section-title center">
                        <h1>Find Your Home</h1>
                    </div>
                </div>
            </div>
            <!--Section Title end-->

            <div class="row">
                <div class="col">

                    <!--Property Search start-->
                    <div class="property-search">

                        <form action="#">

                            <div>
                                <input type="text" placeholder="Location">
                            </div>

                            <div>
                                <select class="nice-select">
                                    <option>All Cities</option>
                                    <option>Athina</option>
                                    <option>Austin</option>
                                    <option>Baytown</option>
                                    <option>Brampton</option>
                                    <option>Cedar Hill</option>
                                    <option>Chester</option>
                                    <option>Chicago</option>
                                    <option>Coleman</option>
                                    <option>Corpus Christi</option>
                                    <option>Dallas</option>
                                    <option>distrito federal</option>
                                    <option>Fayetteville</option>
                                    <option>Galveston</option>
                                    <option>Jersey City</option>
                                    <option>Los Angeles</option>
                                    <option>Midland</option>
                                    <option>New York</option>
                                    <option>Odessa</option>
                                    <option>Reno</option>
                                    <option>San Angelo</option>
                                    <option>San Antonio</option>
                                </select>
                            </div>

                            <div>
                                <select class="nice-select">
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                            </div>

                            <div>
                                <select class="nice-select">
                                    <option>Type</option>
                                    <option>Apartment</option>
                                    <option>Cafe</option>
                                    <option>House</option>
                                    <option>Restaurant</option>
                                    <option>Store</option>
                                    <option>Villa</option>
                                </select>
                            </div>

                            <div>
                                <select class="nice-select">
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>

                            <div>
                                <select class="nice-select">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>

                            <div>
                                <div id="search-price-range"></div>
                            </div>

                            <div>
                                <button>search</button>
                            </div>

                        </form>

                    </div>
                    <!--Property Search end-->

                </div>
            </div>

        </div>
    </div>
    <!--Search Section section end-->

@stop

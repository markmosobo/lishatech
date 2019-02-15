@extends('front.layouts.app')
@section('content')
        <div class="page-header parallax clearfix" style="background-image:url({{ asset('images/default-event-list-img.jpg') }});">
            <div class="title-subtitle-holder">
                <div class="title-subtitle-holder-inner">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Breadcrumbs -->
        <div class="lgray-bg breadcrumb-cont">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-md-4" id="sidebar-col">
                        <div id="text-1" class="widget sidebar-widget widget_text">			<div class="textwidget"><h2>Our Locations</h2>
                                <hr class="sm">
                                <h4 class="short accent-color">Texas, Unites States</h4>
                                <p>777, path to God<br>1800-989-990<br><a href="mailto:us@adorechurch.com">us@adorechurch.com</a></p>
                                <hr class="fw cont">
                                <h4 class="short accent-color">London</h4>
                                <p>777, path to God<br>1800-989-990<br><a href="mailto:uk@adorechurch.com">uk@adorechurch.com</a></p>
                                <hr class="fw cont">
                                <h4 class="short accent-color">Toronto</h4>
                                <p>777, path to God<br>1800-989-990<br><a href="mailto:ca@adorechurch.com">ca@adorechurch.com</a></p></div>
                        </div>                    </div>
                    <div class="col-md-8 col-sm-6" id="content-col">
                        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="https://demo.imithemes.com/adore-church-wp/wp-content/themes/AdoreChurch/mail/contact.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type ="hidden" name ="image_path" id="image_path" value ="https://demo.imithemes.com/adore-church-wp/wp-content/themes/AdoreChurch">
                            <input type ="hidden" name ="recipients" id="recipients" value ="2771">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Submit now!">
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
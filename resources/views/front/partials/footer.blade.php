@foreach($contacts as $contact)


    <!--Footer Top start-->
    <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25">

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    {{--<img src="assets/images/logo-footer.png" alt="">--}}
                    <p>Lishatech properties was started in 2003 as a venture for selling land but has grown over time to offer comprehensive real estate services .The company has continually grown to selling properties and managing property within Nairobi and its environs.</p>
                    <div class="footer-social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title"><span class="text">Contact us</span><span class="shape"></span></h4>
                    <ul>
                        <li><i class="fa fa-map-o"></i><span>{{$contact->address}}</span></li>
                        <li><i class="fa fa-phone"></i><span><a href="#">{{$contact->phone}}</a><a href="#">{{$contact->alternative_phone}}</a></span></li>
                        <li><i class="fa fa-envelope-o"></i><span><a href="#">{{$contact->email}}</a><a href="{{url('/')}}">www.lishatech.co.ke</a></span></li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title"><span class="text">Useful links</span><span class="shape"></span></h4>
                    <ul>
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('our-services')}}">Services</a></li>
                        <li><a href="{{url('all-properties')}}">Properties</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('management-portfolio')}}">Management Portfolio</a></li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title"><span class="text">Newsletter</span><span class="shape"></span></h4>

                    <p>Subscribe our newsletter and get all latest news about our latest properties, promotions, offers and discount</p>

                    <form id="mc-form" class="mc-form footer-newsletter" >
                        <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." />
                        <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->

                </div>
                <!--Footer Widget end-->

            </div>
        </div>
    </div>
    <!--Footer Top end-->

    <!--Footer bottom start-->
    <div class="footer-bottom section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p>Copyright &copy;{{\Carbon\Carbon::now()->year}} <a  href="#">{{config('app.name')}}. Powered by</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

@endforeach
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function aboutUs(){
    return view('front.about-us');
    }

    public function contactUs(){
        return view('front.contact-us');
    }

    public function managementPortfolio(){
        return view('front.management-portfolio');
    }

    public function salePlot(){
        return view('front.plots-for-sale');
    }

    public function saleCommercial(){
        return view('front.properties-for-sale-commercial');
    }

    public function saleResidential(){
        return view('front.properties-for-sale-residential');
    }

    public function rentCommercial(){
        return view('front.properties-to-rent-commercial');
    }

    public function rentResidential(){
        return view('front.properties-to-rent-residential');
    }

    public function services(){
        return view('front.our-services');
    }

    public function blog(){
        return view('front.blog');
    }
}

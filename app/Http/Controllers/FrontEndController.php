<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ManagementPortfolio;
use App\Models\Plot;
use App\Models\Property;
use App\Models\PropertyforSale;
use App\Models\PropertytoRent;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index',[
            'properties'=>Property::all(),
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'comproperties'=>PropertyforSale::orderByDesc('created_at')->take(1)->get(),
            'resproperties'=>PropertytoRent::orderByDesc('created_at')->take(1)->get(),
            'aboutus'=>AboutUs::all(),
            'saleproperties'=>PropertyforSale::all(),
            'rentproperties'=>PropertytoRent::all()
        ]);
    }

    public function aboutUs(){
    return view('front.about-us',[
        'aboutus'=>AboutUs::orderByDesc('id')->take(1)->get(),
        'contacts'=>Contact::orderByDesc('id')->take(1)->get()
    ]);
    }

    public function contactUs(){
        return view('front.contact-us',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function managementPortfolio(){
        return view('front.management-portfolio',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'portfolio'=>ManagementPortfolio::all()
        ]);
    }

    public function salePlot(){
        return view('front.plots-for-sale',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'plots'=>Plot::all()
        ]);
    }

    public function singlePlot($id){
        $plot=Plot::find($id);
        return view('front.single-plot',['contacts'=>Contact::all(),'featplots'=>Plot::all()])->withPlot($plot);
    }

    public function saleCommercial(){
        return view('front.properties-for-sale-commercial',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'properties'=>PropertyforSale::all()
        ]);
    }

    public function saleResidential(){
        return view('front.properties-for-sale-residential',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'properties'=>PropertyforSale::all()
        ]);
    }

    public function rentCommercial(){
        return view('front.properties-to-rent-commercial',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'properties'=>PropertytoRent::all()
        ]);
    }

    public function rentResidential(){
        return view('front.properties-to-rent-residential',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'properties'=>PropertytoRent::all()
        ]);
    }

    public function services(){
        return view('front.our-services',[
            'contacts'=>Contact::orderByDesc('id')->take(1)->get(),
            'properties'=>PropertyforSale::all()
        ]);
    }

    public function blog(){
        return view('front.blog',[
            'blogs'=>Blog::all(),
            'contacts'=>Contact::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function singleBlog($id){
        $blog=Blog::find($id);
        return view('front.single-blog',['contacts'=>Contact::orderByDesc('id')->take(1)->get(),'blogs'=>Blog::all()])->withBlog($blog);
    }

    public function allProperties(){
        return view('front.all-properties',[
            'properties'=>PropertyforSale::all(),
            'contacts'=>Contact::orderByDesc('id')->take(1)->get()
        ]);
    }

    public function singleProperty($id){
            $property=PropertyforSale::find($id);
        return view('front.single-property',['contacts'=>Contact::all(),'properties'=>PropertyforSale::all()])->withProperty($property);
    }
}

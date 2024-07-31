<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageBanner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('frontend.pages.home.home');
    }
    public function aboutUs()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'about')->latest('id')->first(),
        ];
        return view('frontend.pages.about',$data);
    }
    public function contactUs()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'contact')->latest('id')->first(),
        ];
        return view('frontend.pages.contact',$data);
    }
    public function allBrand()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'brand')->latest('id')->first(),
        ];
        return view('frontend.pages.allBrand',$data);
    }
    public function allCoupon()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'coupon')->latest('id')->first(),
        ];
        return view('frontend.pages.allCoupon',$data);
    }
    public function allStore()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.allStore',$data);
    }
    public function allOffer()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'offer')->latest('id')->first(),
        ];
        return view('frontend.pages.allOffer',$data);
    }
    public function termsCondition()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'terms')->latest('id')->first(),
        ];
        return view('frontend.pages.termsCondition',$data);
    }
    public function privacyPolicy()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'privacy')->latest('id')->first(),
        ];
        return view('frontend.pages.privacyPolicy',$data);
    }
    public function faq()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'faq')->latest('id')->first(),
        ];
        return view('frontend.pages.faq',$data);
    }

}

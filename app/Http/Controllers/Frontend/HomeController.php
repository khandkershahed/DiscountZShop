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
        return view('frontend.pages.about');
    }
    public function contactUs()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'contact')->latest('id')->first(),
        ];
        return view('frontend.pages.contact');
    }
    public function allBrand()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'brand')->latest('id')->first(),
        ];
        return view('frontend.pages.allBrand');
    }
    public function allCoupon()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'coupon')->latest('id')->first(),
        ];
        return view('frontend.pages.allCoupon');
    }
    public function allStore()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.allStore');
    }
    public function allOffer()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'offer')->latest('id')->first(),
        ];
        return view('frontend.pages.allOffer');
    }
    public function termsCondition()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'terms')->latest('id')->first(),
        ];
        return view('frontend.pages.termsCondition');
    }
    public function privacyPolicy()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'privacy')->latest('id')->first(),
        ];
        return view('frontend.pages.privacyPolicy');
    }
    public function faq()
    {
        $data =[
            'page_banner' => PageBanner::where('page_name' , 'faq')->latest('id')->first(),
        ];
        return view('frontend.pages.faq');
    }

}

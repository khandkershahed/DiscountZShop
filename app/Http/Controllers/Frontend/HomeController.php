<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('frontend.pages.home.home');
    }
    public function aboutUs()
    {
        return view('frontend.pages.about');
    }
    public function contactUs()
    {
        return view('frontend.pages.contact');
    }
    public function allBrand()
    {
        return view('frontend.pages.allBrand');
    }
    public function allCoupon()
    {
        return view('frontend.pages.allCoupon');
    }
    public function allStore()
    {
        return view('frontend.pages.allStore');
    }
    public function allOffer()
    {
        return view('frontend.pages.allOffer');
    }
    public function termsCondition()
    {
        return view('frontend.pages.termsCondition');
    }
    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }

}

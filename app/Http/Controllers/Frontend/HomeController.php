<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Offer;
use App\Models\PageBanner;
use App\Models\Slider;
use App\Models\Store;

class HomeController extends Controller
{
    //homePage
    public function homePage()
    {
        $data = [
            'sliders' => Slider::where('status', 'active')->latest()->get(),
            'banner' => Banner::where('status', 'active')->latest()->get(),
            'coupons' => Coupon::latest()->get(),
            'brands' => Brand::latest()->get(),
            'offers' => Offer::where('status','active')->inRandomOrder()->limit(5)->get(),
        ];

        return view('frontend.pages.home.home', $data);
    }

    //About Us
    public function aboutUs()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'about')->latest('id')->first(),
            'about' => AboutUs::latest('id')->first(),
            'brands' => Brand::latest()->get(),
        ];
        return view('frontend.pages.about', $data);
    }

    public function contactUs()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'contact')->latest('id')->first(),
        ];
        return view('frontend.pages.contact', $data);
    }

    //allBrand
    public function allBrand()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            'categories' => Category::with('brands')->latest('id')->active()->get(),
            'brands' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
        ];
        return view('frontend.pages.allBrand', $data);
    }

    //brandDetails
    public function brandDetails($slug)
    {
        $data = [
            'brand' => Brand::where('slug', $slug)->first(),
            'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
        ];
        return view('frontend.pages.brandDetails', $data);
    }

    public function allCoupon()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'coupon')->latest('id')->first(),
        ];
        return view('frontend.pages.allCoupon', $data);
    }

    public function couponDetails($slug)
    {
        $data = [
            'coupon' => Coupon::where('slug', $slug)->first(),
            'page_banner' => PageBanner::where('page_name', 'coupon')->latest('id')->first(),
        ];
        return view('frontend.pages.couponDetails', $data);
    }
    public function allStore()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.allStore', $data);
    }
    public function storeDetails($slug)
    {
        $data = [
            'store' => Store::where('slug', $slug)->first(),
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.storeDetails', $data);
    }

    //allOffer
    public function allOffer()
    {
        $data = [

            'page_banner' => PageBanner::where('page_name', 'offer')->latest('id')->first(),
            'categorys'   => Category::withCount('offers')->where('status', 'active')->orderBy('name','ASC')->limit(10)->latest()->get(),
            'offers'      => Offer::latest('id')->get(),
        ];
        return view('frontend.pages.allOffer', $data);
    }

    //offerDetails
    public function offerDetails($slug)
    {
        $data = [
            'offer' => Offer::where('slug', $slug)->first(),
        ];

        return view('frontend.pages.offerDetails', $data);
    }
    public function categoryDetails($slug)
    {
        $data = [
            'offer' => Category::where('slug', $slug)->first(),
            'page_banner' => PageBanner::where('page_name', 'offer')->latest('id')->first(),
        ];
        return view('frontend.pages.categoryDetails', $data);
    }
    public function termsCondition()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'terms')->latest('id')->first(),
        ];
        return view('frontend.pages.termsCondition', $data);
    }
    public function privacyPolicy()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'privacy')->latest('id')->first(),
        ];
        return view('frontend.pages.privacyPolicy', $data);
    }
    public function faq()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'faq')->latest('id')->first(),
        ];
        return view('frontend.pages.faq', $data);
    }

}

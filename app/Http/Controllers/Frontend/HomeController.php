<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Faq;
use App\Models\HomePage;
use App\Models\Offer;
use App\Models\PageBanner;
use App\Models\PrivacyPolicy;
use App\Models\Slider;
use App\Models\Store;
use App\Models\TermsAndCondition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //homePage
    public function homePage()
    {
        // Retrieve offers and apply limits directly on queries
        $offers = Offer::where('status', 'active')->inRandomOrder()->get();
        $latestOffers = Offer::where('status', 'active')->latest('id')->get();

        $data = [
            'sliders' => Slider::where('status', 'active')->latest('id')->get(),
            'banner' => Banner::where('status', 'active')->latest('id')->first(),
            'coupons' => Coupon::latest()->get(),
            'brands' => Brand::latest()->get(),

            'alloffers' => $offers,
            'offers' => $offers->take(5), // Use `take` instead of `limit` for collections

            'offerLatests' => $latestOffers->sortBy('name')->reverse(), // Sort by name and reverse the order
            'offerDealLefts' => $offers->take(5),
            'offerDeals' => $latestOffers->take(6),

            'homepage' => HomePage::with('brand')->latest('id')->first(),
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
            // 'brands' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            'brands' => Brand::latest()->get(),
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
    public function allOffer(Request $request)
    {
        $page_banner = PageBanner::where('page_name', 'offer')->latest('id')->first();
        $categorys = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->limit(10)->latest()->get();
        $offerss = Offer::latest()->get();

        $sectionId = $request->input('section');
        $offersQuery = Offer::latest();

        if ($sectionId) {
            // Ensure that 'division_id' is the correct field to filter by
            $offersQuery->where('division_id', $sectionId);
        }

        $offers = $offersQuery->get();

        return view('frontend.pages.allOffer', compact('page_banner', 'categorys', 'offers', 'offerss'));
    }

    //offerDetails
    public function offerDetails($slug)
    {
        $offerDetails = Offer::where('slug', $slug)->first();
        if ($offerDetails) {
            return view('frontend.pages.offerDetails', compact('offerDetails'));
        } else {
            return redirect()->back()->with('Offer is not available.');

        }

    }
    //searchCourseNAme
    public function searchOfferName(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $offers = Offer::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $offers = Offer::latest()->get();
        }

        return view('frontend.pages.allOffer_search', compact('offers'))->render();
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
            'terms' => TermsAndCondition::latest('id')->first(),
        ];
        return view('frontend.pages.termsCondition', $data);
    }
    public function privacyPolicy()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'privacy')->latest('id')->first(),
            'terms' => PrivacyPolicy::latest('id')->first(),
        ];
        return view('frontend.pages.privacyPolicy', $data);
    }
    public function faq()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'faq')->latest('id')->first(),
            'faqs' => Faq::orderBy('order', 'ASC')->get(),
        ];
        return view('frontend.pages.faq', $data);
    }
}

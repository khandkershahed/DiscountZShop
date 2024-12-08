<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Store;
use App\Models\Banner;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\HomePage;
use App\Models\PageBanner;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;
use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\OfferType;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    //homePage
    public function homePage()
    {
        // Retrieve offers and apply limits directly on queries
        $offers = Offer::where('status', 'active')->inRandomOrder()->get();
        $latestOffers = Offer::where('status', 'active')->latest('id')->get();
        $homepage = HomePage::with('brand')->latest('id')->first();
        $all_brand_offers = Offer::where('brand_id', $homepage->deal_brand_id)->inRandomOrder()->limit(4)->get();

        // Split them into two collections: one for the left and one for the right
        $brand_offers_left = $all_brand_offers->take(2); // Take first 2 offers for left side
        $brand_offers_right = $all_brand_offers->skip(2);
        $data = [
            'sliders'            => Slider::where('status', 'active')->latest('id')->get(),
            'banner'             => Banner::where('status', 'active')->latest('id')->first(),
            'coupons'            => Coupon::latest()->get(),
            'brands'             => Brand::latest()->get(),
            'offer_types'        => OfferType::latest()->get(),

            'categorys'          => Category::latest()->limit(6)->get(),

            'alloffers'          => $offers,
            'offers'             => $offers->take(5), // Use `take` instead of `limit` for collections

            'offerLatests'       => $latestOffers->sortBy('name')->reverse(), // Sort by name and reverse the order
            'offerDealLefts'     => $offers->take(5),
            'offerDeals'         => $latestOffers->take(6),

            'homepage'           => $homepage,
            'brand_offers_left'  => $brand_offers_left,
            'brand_offers_right' => $brand_offers_right,
        ];


        return view('frontend.pages.home.home', $data);
    }

    // ===
    public function searchDeal(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $offerDeals = Offer::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $offerDeals = Offer::latest()->get();
        }

        return view('frontend.pages.deal_search', compact('offerDeals'));
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
            'categories' => Category::with('brands') // Eager load the brands relationship
                ->orderBy('name', 'ASC') // Order categories by name in ascending order
                ->latest('id') // Order categories by the latest ID (newest first)
                ->active() // Assuming you have an active scope in your Category model
                ->get(),

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

    // Vendor Details
    public function vendors()
    {
        // $data = [
        //     'vendor' => Vendor::where('slug', $slug)->first(),
        //     'page_banner' => PageBanner::where('page_name', 'vendor')->latest('id')->first(),
        // ];
        return view('frontend.pages.vendor.vendors');
    }
    public function vendorOverview($slug)
    {
        $brand = Brand::with('stores')->where('slug', $slug)->first();
        if ($brand) {
            $data = [
                'brand' => $brand,
                'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            ];
            return view('frontend.pages.vendor.overview', $data);
        } else {
            Session::flash('warning', 'This Page is not available right now.');
            return redirect()->back();
        }
    }
    public function vendorStores($slug)
    {
        $brand = Brand::with('stores')->where('slug', $slug)->first();
        if ($brand) {
            $data = [
                'brand' => $brand,
                'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            ];
            return view('frontend.pages.vendor.stores', $data);
        } else {
            Session::flash('warning', 'This Page is not available right now.');
            return redirect()->back();
        }
    }
    public function vendorOffers($slug)
    {
        $brand = Brand::with('stores', 'offers')->where('slug', $slug)->first();
        if ($brand) {
            $data = [
                'brand' => $brand,
                'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            ];
            return view('frontend.pages.vendor.offers', $data);
        } else {
            Session::flash('warning', 'This Page is not available right now.');
            return redirect()->back();
        }
    }
    public function wallet($slug)
    {
        // $data = [
        //     'vendor' => Vendor::where('slug', $slug)->first(),
        //     'page_banner' => PageBanner::where('page_name', 'vendor')->latest('id')->first(),
        // ];
        return view('frontend.pages.wallet.myWallet');
    }

    //searchBrandName
    // Check if categories and brands are fetched correctly
    public function searchBrandName(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            // Fetch categories with brands
            $categories = Category::with('brands')->latest('id')->active()->get();
            // Fetch brands based on the search query
            $brands = Brand::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            // Fetch all categories with brands
            $categories = Category::with('brands')->latest('id')->active()->get();
            // Fetch all brands
            $brands = Brand::latest()->get();
        }

        // Return the view with the data
        return view('frontend.pages.brand_search', compact('brands', 'categories'));
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

    //allStore
    public function allStore()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
            'latest_stores' => Store::where('status', 'active')->orderBy('title', 'ASC')->limit(4)->latest()->get(),
            'stores' => Store::where('status', 'active')->orderBy('title', 'ASC')->get(),
        ];
        return view('frontend.pages.allStore', $data);
    }

    //storeDetails
    public function storeDetails($id)
    {
        $data = [
            'store' => Store::findOrFail($id),
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.storeDetails', $data);
    }

    //searchStoreName
    public function searchStoreName(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $latest_stores = Store::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $latest_stores = Store::latest()->get();
        }

        return view('frontend.pages.store_search', compact('latest_stores'));
    }

    //searchDivisionName
    public function searchDivisionName(Request $request)
    {
        $latest_stores = [];
        $query = $request->input('division_id');

        if ($query) {
            $latest_stores = Store::where('division_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $latest_stores = Store::latest()->get();
        }

        $responseHtml = view('frontend.pages.store_division_search', ['latest_stores' => $latest_stores])->render();

        return response()->json(['html' => $responseHtml]);
    }

    //searchCityName
    public function searchCityName(Request $request)
    {
        $latest_stores = [];
        $query = $request->input('city_id');

        if ($query) {
            $latest_stores = Store::where('city_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $latest_stores = Store::latest()->get();
        }

        $responseHtml = view('frontend.pages.store_division_search', ['latest_stores' => $latest_stores])->render();

        return response()->json(['html' => $responseHtml]);
    }

    //searchAreaName
    public function searchAreaName(Request $request)
    {
        $latest_stores = [];
        $query = $request->input('area_id');

        if ($query) {
            $latest_stores = Store::where('area_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $latest_stores = Store::latest()->get();
        }

        $responseHtml = view('frontend.pages.store_division_search', ['latest_stores' => $latest_stores])->render();

        return response()->json(['html' => $responseHtml]);
    }

    //allOffer
    // public function allOffer(Request $request)
    // {
    //     $page_banner = PageBanner::where('page_name', 'offer')->latest('id')->first();
    //     $categories = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->limit(10)->latest()->get();
    //     $offerss = Offer::latest()->get();

    //     // $offers = Offer::latest()->get();

    //     return view('frontend.pages.allOffer', compact('page_banner', 'categories', 'offerss'));
    // }

    public function allOffer(Request $request)
    {
        $page_banner = PageBanner::where('page_name', 'offer')->latest('id')->first();
        $categories = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->get();

        // Get selected category if it's passed in the request
        $category_id = $request->category_id;

        // If a category is selected, fetch offers for that category, else fetch all offers
        if ($category_id) {
            $offers = Offer::where('category_id', $category_id)->latest()->get();
        } else {
            $offers = Offer::latest()->get(); // Default to all offers if no category is selected
        }

        return view('frontend.pages.allOffer', compact('page_banner', 'categories', 'offers'));
    }


    //offerDetails
    public function offerDetails($slug)
    {
        $offerDetails = Offer::where('slug', $slug)->first();
        $brand = Brand::with('stores')->where('id', $offerDetails->brand_id)->first();

        $data = [
            'brand'         => $brand,
            'offerDetails'  => $offerDetails,
            'page_banner'   => PageBanner::where('page_name', 'brand')->latest('id')->first(),
        ];

        if ($offerDetails && $brand) {
            Session::flash('warning', 'This Offer is not available right now.');
            return view('frontend.pages.vendor.offer_details', $data);
            // return view('frontend.pages.offerDetails', $data);
        } else {
            Session::flash('error', 'Offer is not available.');
            return redirect()->back();
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

    public function searchOfferDivisionName(Request $request)
    {
        $offerss = [];
        $query = $request->input('division_id');

        if ($query) {
            $offerss = Offer::where('division_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $offerss = Offer::latest()->get();
        }

        $responseHtml = view('frontend.pages.offer_division_search', ['offerss' => $offerss])->render();

        return response()->json(['html' => $responseHtml]);
    }

    public function mapDivision(Request $request)
    {

        $division = $request->input('division');

        if ($division) {
            $division = Division::with('cities', 'areas')->where('name', 'like', "%{$division}%")->first();
        } else {
            $division = '';
        }

        $responseHtml = view('frontend.pages.home.partial.map_division', ['division' => $division])->render();

        return response()->json(['html' => $responseHtml]);
    }

    //searchCityName
    public function searchOfferCityName(Request $request)
    {
        $offerss = [];
        $query = $request->input('city_id');

        if ($query) {
            $offerss = Offer::where('city_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $offerss = Offer::latest()->get();
        }

        $responseHtml = view('frontend.pages.offer_division_search', ['offerss' => $offerss])->render();

        return response()->json(['html' => $responseHtml]);
    }

    //searchAreaName
    public function searchOfferAreaName(Request $request)
    {
        $offerss = [];
        $query = $request->input('area_id');

        if ($query) {
            $offerss = Offer::where('area_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $offerss = Offer::latest()->get();
        }

        $responseHtml = view('frontend.pages.offer_division_search', ['offerss' => $offerss])->render();

        return response()->json(['html' => $responseHtml]);
    }

    public function categoryDetails($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $data = [
            'page_banner' => PageBanner::where('page_name', 'offer')->latest('id')->first(),
            'category' => $category,
            'offerss' => Offer::where('category_id', $category->id)->get(),

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

    //ProductSearch
    public function productSearch(Request $request)
    {

        $request->validate(['search' => "required"]);

        $page_banner = PageBanner::where('page_name', 'search')->latest('id')->first();
        $item = $request->search;

        $brands = Brand::where('name', 'LIKE', "%$item%")
            ->orWhere('offer_description_title', "LIKE", "%$item%")
            ->orWhere('description_title', "LIKE", "%$item%")
            ->get();

        $offers = Offer::where('name', 'LIKE', "%$item%")
            ->orWhere('short_description', "LIKE", "%$item%")
            ->orWhere('description', "LIKE", "%$item%")
            ->get();

        $stores = Store::where('title', 'LIKE', "%$item%")
            ->orWhere('slug', "LIKE", "%$item%")
            ->orWhere('description', "LIKE", "%$item%")
            ->get();

        return view('frontend.pages.search.product_search', compact('item', 'brands', 'offers', 'stores', 'page_banner'));
    }


    public function WishlistProduct()
    {
        return view('frontend.pages.wishlist');
    }

    public function AddToWishlist(Request $request)
    {
        $id = $request->product_id;

        // Find the product by ID
        $product = Offer::findOrFail($id);

        // Add the product to the wishlist
        Cart::instance('wishlist')->add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => 0,
            'weight' => 1,
            'options' => [
                'image' => $product->image,
                // No price included
            ],
        ]);

        return response()->json(['success' => 'Successfully added to your wishlist']);
    }


    public function GetWishlist()
    {
        $cartWishlist = Cart::instance('wishlist')->content(); // Limiting to 3 products
        $cartWishlistQty = Cart::instance('wishlist')->count();
        $cartTotal = Cart::instance('wishlist')->total();

        return response()->json(array(
            'cartWishlist' => $cartWishlist,
            'cartWishlistQty' => $cartWishlistQty,
            'cartTotal' => $cartTotal,
        ));
    }

    public function RemoveWishlistTemplateOne($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Wishlist']);
    }
}

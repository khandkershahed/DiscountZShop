<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Area;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\City;
use App\Models\Coupon;
use App\Models\Division;
use App\Models\Faq;
use App\Models\HomePage;
use App\Models\Offer;
use App\Models\OfferType;
use App\Models\PageBanner;
use App\Models\PrivacyPolicy;
use App\Models\Slider;
use App\Models\Store;
use App\Models\TermsAndCondition;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //homePage
    public function homePage()
    {
        // Retrieve offers and apply limits directly on queries
        $offers       = Offer::where('status', 'active')->inRandomOrder()->get();
        $latestOffers = Offer::where('status', 'active')->latest('id')->get();
        $homepage     = HomePage::with('brand')->latest('id')->first();

        // Split them into two collections: one for the left and one for the right
        $all_brand_offers   = Offer::where('brand_id', $homepage->deal_brand_id)->inRandomOrder()->limit(4)->get();
        $brand_offers_left  = $all_brand_offers->take(2);
        $brand_offers_right = $all_brand_offers->skip(2);
        // dd($brand_offers_right);
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
            'about'       => AboutUs::latest('id')->first(),
            'brands'      => Brand::latest()->get(),
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
            'categories'  => Category::with('brands') // Eager load the brands relationship
                ->orderBy('name', 'ASC')                  // Order categories by name in ascending order
                ->latest('id')                            // Order categories by the latest ID (newest first)
                ->active()                                // Assuming you have an active scope in your Category model
                ->get(),

            // 'brands' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
            'brands'      => Brand::latest()->get(),
        ];
        return view('frontend.pages.allBrand', $data);
    }

    public function searchAllBrands(Request $request)
    {
        $query = $request->get('query');

        if ($query) {
            $brands = Brand::where('name', 'like', "%$query%")->get();
        } else {
            // If query is empty, we don't need to reload all the brands
            // $brands = Brand::latest()->get();

            $data = [
                'page_banner' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
                'categories'  => Category::with('brands') // Eager load the brands relationship
                    ->orderBy('name', 'ASC')                  // Order categories by name in ascending order
                    ->latest('id')                            // Order categories by the latest ID (newest first)
                    ->active()                                // Assuming you have an active scope in your Category model
                    ->get(),

                // 'brands' => PageBanner::where('page_name', 'brand')->latest('id')->first(),
                'brands'      => Brand::latest()->get(),
            ];
            return view('frontend.pages.allBrand', $data);
        }

        // Return the partial view with the brand list
        return view('frontend.pages.partials.brand-list', compact('brands'));
    }

    //brandDetails
    public function brandDetails($slug)
    {
        $data = [
            'brand'       => Brand::where('slug', $slug)->first(),
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
                'brand'       => $brand,
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
                'brand'       => $brand,
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
                'brand'       => $brand,
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
            'coupon'      => Coupon::where('slug', $slug)->first(),
            'page_banner' => PageBanner::where('page_name', 'coupon')->latest('id')->first(),
        ];
        return view('frontend.pages.couponDetails', $data);
    }

    //allStore

    // public function allStore()
    // {
    //     $data = [

    //         'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
    //         'stores'      => Store::where('status', 'active')->orderBy('title', 'DESC')->paginate(30),

    //         'alldivs'     => Division::orderBy('name', 'asc')->get(),
    //         'allcitys'    => City::orderBy('name', 'asc')->get(),
    //         'allareas'    => Area::orderBy('name', 'asc')->get(),

    //     ];

    //     return view('frontend.pages.allStore', $data);
    // }

    public function allStore(Request $request)
    {
        $brandSlug = $request->input('brand');

        $data = [
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
            'stores'      => Store::where('status', 'active')
                ->orderBy('title', 'DESC')
                ->paginate(30)
                ->appends(['brand' => $brandSlug]), // Append the brand parameter
            'alldivs'     => Division::orderBy('name', 'asc')->get(),
            'allcitys'    => City::orderBy('name', 'asc')->get(),
            'allareas'    => Area::orderBy('name', 'asc')->get(),
        ];

        return view('frontend.pages.allStore', $data);
    }

    //storeDetails
    public function storeDetails($id)
    {
        $data = [
            'store'       => Store::findOrFail($id),
            'page_banner' => PageBanner::where('page_name', 'store')->latest('id')->first(),
        ];
        return view('frontend.pages.storeDetails', $data);
    }

    public function GetCheckDistrict($division_id)
    {

        $subcat = City::where('division_id', $division_id)->orderBy('name', 'ASC')->get();

        return json_encode($subcat);
    }

    public function StateGetAjax($city_id)
    {

        $ship = Area::where('city_id', $city_id)->orderBy('name', 'ASC')->get();

        return json_encode($ship);
    }

    // Search Division
    public function searchDivisionName(Request $request)
    {
        $latest_stores = [];
        $query         = $request->input('division_id');

        // Check if the division_id exists in the request and perform the query
        if ($query) {
            $latest_stores = Store::where('division_id', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $latest_stores = Store::latest()->get();
        }

        // Return the filtered stores as HTML
        $responseHtml = view('frontend.pages.store_division_search', ['latest_stores' => $latest_stores])->render();

        return response()->json(['html' => $responseHtml]);
    }

    // Search City
    public function searchCityName(Request $request)
    {
        $latest_stores = [];
        $query         = $request->input('city_id');

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

    // Search Area
    public function searchAreaName(Request $request)
    {
        $latest_stores = [];
        $query         = $request->input('area_id');

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
    //     $categories  = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->get();

    //     // Get selected category if it's passed in the request
    //     $category_id = $request->category_id;

    //     // If a category is selected, fetch offers for that category, else fetch all offers
    //     if ($category_id) {
    //         $offers = Offer::where('category_id', $category_id)->latest()->paginate(12); // Paginate offers with 12 items per page
    //     } else {
    //         $offers = Offer::latest()->paginate(12); // Default to paginated offers
    //     }

    //     return view('frontend.pages.allOffer', compact('page_banner', 'categories', 'offers'));
    // }

    // public function allOffer(Request $request)
    // {
    //     $page_banner = PageBanner::where('page_name', 'offer')->latest('id')->first();
    //     $categories  = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->get();

    //     // Get selected category if it's passed in the request
    //     $category_id = $request->category_id;

    //     // Initialize the query for offers
    //     $offersQuery = Offer::query();

    //     // Apply category filter if provided
    //     if ($category_id) {
    //         $offersQuery->where('category_id', $category_id);
    //     }

    //     $offers = $offersQuery->latest()->paginate(15);

    //     return view('frontend.pages.allOffer', compact('page_banner', 'categories', 'offers'));
    // }

    public function allOffer(Request $request)
    {
        $page_banner = PageBanner::where('page_name', 'offer')->latest('id')->first();
        $categories  = Category::withCount('offers')->where('status', 'active')->orderBy('name', 'ASC')->get();

        $alldivs  = Division::orderBy('name', 'asc')->get();
        $allcitys = City::orderBy('name', 'asc')->get();
        $allareas = Area::orderBy('name', 'asc')->get();

        // Get selected category if it's passed in the request
        $category_id = $request->category_id;

        // Initialize the query for offers
        $offersQuery = Offer::query();

        // Apply category filter if provided
        if ($category_id) {
            $offersQuery->where('category_id', $category_id);
        }

        $offers = $offersQuery->latest()->paginate(15);

        return view('frontend.pages.allOffer', compact('page_banner', 'categories', 'offers', 'alldivs', 'allcitys', 'allareas'));
    }

    public function GetCheckDivision($division_id)
    {

        $subcat = City::where('division_id', $division_id)->orderBy('name', 'ASC')->get();

        return json_encode($subcat);
    }

    public function StateGetAjaxCity($city_id)
    {

        $ship = Area::where('city_id', $city_id)->orderBy('name', 'ASC')->get();

        return json_encode($ship);
    }

    // public function filterOfferss(Request $request)
    // {
    //     $offersQuery = Offer::query();

    //     // Apply filters for division_id, city_id, area_id if provided
    //     if ($request->has('division_id') && $request->division_id != '') {
    //         $offersQuery->whereJsonContains('division_id', $request->division_id);
    //     }

    //     if ($request->has('city_id') && $request->city_id != '') {
    //         $offersQuery->whereJsonContains('city_id', $request->city_id);
    //     }

    //     if ($request->has('area_id') && $request->area_id != '') {
    //         $offersQuery->whereJsonContains('area_id', $request->area_id);
    //     }

    //     // Apply search filter if provided
    //     if ($request->has('search') && $request->search != '') {
    //         $offersQuery->where('name', 'like', '%' . $request->search . '%');
    //     }

    //     $offers = $offersQuery->paginate(15);

    //     // Return the updated store listings with pagination
    //     return response()->json([
    //         'offers'     => view('offers.partials.offer-list', compact('offers'))->render(),
    //         'pagination' => view('offers.partials.pagination', compact('offers'))->render(),
    //     ]);
    // }

    public function filterOfferss(Request $request)
    {
        $offersQuery = Offer::query();

        // Apply filters for division_id, city_id, area_id if provided
        if ($request->has('division_id') && $request->division_id != '') {
            $offersQuery->whereJsonContains('division_id', $request->division_id);
        }

        if ($request->has('city_id') && $request->city_id != '') {
            $offersQuery->whereJsonContains('city_id', $request->city_id);
        }

        if ($request->has('area_id') && $request->area_id != '') {
            $offersQuery->whereJsonContains('area_id', $request->area_id);
        }

        // Apply search filter if provided
        if ($request->has('search') && $request->search != '') {
            $offersQuery->where('name', 'like', '%' . $request->search . '%');
        }

        $offers = $offersQuery->paginate(15);

        // Return the updated offer listings with pagination
        return response()->json([
            'offers'     => view('offers.partials.offer-list', compact('offers'))->render(),
            'pagination' => view('offers.partials.pagination', compact('offers'))->render(),
        ]);
    }

    //offerDetails
    public function offerDetails($slug)
    {
        $offerDetails = Offer::where('slug', $slug)->first();
        $brand        = Brand::with('stores')->where('id', $offerDetails->brand_id)->first();

        $data = [
            'brand'        => $brand,
            'offerDetails' => $offerDetails,
            'page_banner'  => PageBanner::where('page_name', 'brand')->latest('id')->first(),
        ];

        if ($offerDetails && $brand) {
            // Session::flash('warning', 'This Offer is not available right now.');
            return view('frontend.pages.vendor.offer_details', $data);
            // return view('frontend.pages.offerDetails', $data);
        } else {
            // Session::flash('error', 'Offer is not available.');
            return redirect()->back();
        }
    }

    //filterOfferss
    // public function filterOfferss(Request $request)
    // {
    //     $offersQuery = Offer::query();

    //     // Apply filters for division_id, city_id, area_id if provided
    //     if ($request->has('division_id') && $request->division_id != '') {
    //         $offersQuery->whereJsonContains('division_id', $request->division_id);
    //     }

    //     if ($request->has('city_id') && $request->city_id != '') {
    //         $offersQuery->whereJsonContains('city_id', $request->city_id);
    //     }

    //     if ($request->has('area_id') && $request->area_id != '') {
    //         $offersQuery->whereJsonContains('area_id', $request->area_id);
    //     }

    //     // Apply search filter if provided
    //     if ($request->has('search') && $request->search != '') {
    //         $offersQuery->where('name', 'like', '%' . $request->search . '%');
    //     }

    //     $offers = $offersQuery->paginate(15);

    //     // Return the updated store listings with pagination
    //     return response()->json([
    //         'offers' => view('offers.partials.offer-list', compact('offers'))->render(),
    //     ]);
    // }

    //searchCouponName
    public function searchCouponName(Request $request)
    {
        $query = $request->input('query');

        // Search for stores based on the query, or get all stores if query is empty
        if ($query) {
            $coupons = Coupon::where('coupon_code', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            // return back();
        }

        // Return the results as HTML to be inserted into the page
        return view('frontend.pages.allCoupon_search', compact('coupons'))->render();
    }

    //mapDivision
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

    //categoryDetails
    public function categoryDetails($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $data     = [
            'page_banner' => PageBanner::where('page_name', 'offer')->latest('id')->first(),
            'category'    => $category,
            'offerss'     => Offer::where('category_id', $category->id)->get(),

        ];
        return view('frontend.pages.categoryDetails', $data);
    }

    //termsCondition
    public function termsCondition()
    {

        $page_banner = PageBanner::where('page_name', 'terms')->latest('id')->first();
        $terms       = TermsAndCondition::latest()->get();

        //dd($data);

        return view('frontend.pages.termsCondition', compact('page_banner', 'terms'));
    }

    public function discounttermsCondition()
    {
        $page_banner = PageBanner::where('page_name', 'terms')->latest('id')->first();
        $terms       = TermsAndCondition::where('status', 'active')->latest('id')->first();

        return view('frontend.pages.discounttermsCondition', compact('page_banner', 'terms'));
    }

    //privacyPolicy
    public function privacyPolicy()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'privacy')->latest('id')->first(),
            'terms'       => PrivacyPolicy::latest('id')->first(),
        ];
        return view('frontend.pages.privacyPolicy', $data);
    }

    public function discountprivacyPolicy()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'privacy')->latest('id')->first(),
            'terms'       => PrivacyPolicy::latest('id')->first(),
        ];
        return view('frontend.pages.discountprivacyPolicy', $data);
    }

    //faq
    public function faq()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'faq')->latest('id')->first(),
            'faqs'        => Faq::where('status', 'active')->orderBy('order', 'ASC')->get(),
        ];
        return view('frontend.pages.faq', $data);
    }

    public function faqDiscountZShop()
    {
        $data = [
            'page_banner' => PageBanner::where('page_name', 'faq')->latest('id')->first(),
            'faqs'        => Faq::where('status', 'active')->orderBy('order', 'ASC')->get(),
        ];
        return view('frontend.pages.faqDiscountZShop.faq', $data);
    }

    //ProductSearch
    public function productSearch(Request $request)
    {

        $request->validate(['search' => "required"]);

        $page_banner = PageBanner::where('page_name', 'search')->latest('id')->first();
        $item        = $request->search;

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
            'id'      => $id,
            'name'    => $product->name,
            'qty'     => 1,
            'price'   => 0,
            'weight'  => 1,
            'options' => [
                'image' => $product->image,
                // No price included
            ],
        ]);

        return response()->json(['success' => 'Successfully added to your wishlist']);
    }

    public function GetWishlist()
    {
        $cartWishlist    = Cart::instance('wishlist')->content(); // Limiting to 3 products
        $cartWishlistQty = Cart::instance('wishlist')->count();
        $cartTotal       = Cart::instance('wishlist')->total();

        return response()->json([
            'cartWishlist'    => $cartWishlist,
            'cartWishlistQty' => $cartWishlistQty,
            'cartTotal'       => $cartTotal,
        ]);
    }

    public function RemoveWishlistTemplateOne($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Wishlist']);
    }
}

<?php

namespace App\Http\Controllers\Frontend\API;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\City;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Store;
use App\Models\Banner;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Setting;
use App\Models\Division;
use App\Models\HomePage;
use App\Models\PageBanner;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeApiController extends Controller
{
    function assetify($path)
    {
        return $path ? url('storage/' . $path) : null;
    }
    public function homePage()
    {
        $homePage = HomePage::with('brand')->latest('id')->first();
        $offers = optional($homePage->brand)->offers;
        $offers = $offers ? $offers->where('status', 'active')->where('expiry_date', '>=', Carbon::now()->format('Y-m-d'))->take(10) : collect();
        $offers->map(function ($offer) {
            $offer->logo         = url('storage/' . $offer->logo);
            $offer->image        = url('storage/' . $offer->image);
            $offer->banner_image = url('storage/' . $offer->banner_image);
            return $offer;
        });
        if ($homePage) {
            $homePage->image_one                  = url('storage/' . $homePage->image_one);
            $homePage->image_two                  = url('storage/' . $homePage->image_two);
            $homePage->image_three                = url('storage/' . $homePage->image_three);
            $homePage->top_banner                 = url('storage/' . $homePage->top_banner);
            $homePage->offer_banner               = url('storage/' . $homePage->offer_banner);
            $homePage->deal_brand_image           = url('storage/' . $homePage->deal_brand_image);
            $homePage->offer_slider_image_one     = url('storage/' . $homePage->offer_slider_image_one);
            $homePage->offer_slider_image_two     = url('storage/' . $homePage->offer_slider_image_two);
            $homePage->offer_slider_image_three   = url('storage/' . $homePage->offer_slider_image_three);
            $homePage->offer_slider_image_four    = url('storage/' . $homePage->offer_slider_image_four);
            $homePage->bottom_banner_slider_one   = url('storage/' . $homePage->bottom_banner_slider_one);
            $homePage->bottom_banner_slider_two   = url('storage/' . $homePage->bottom_banner_slider_two);
            $homePage->bottom_banner_slider_three = url('storage/' . $homePage->bottom_banner_slider_three);
            $homePage->bottom_banner_slider_four  = url('storage/' . $homePage->bottom_banner_slider_four);
            unset($homePage->brand);
        }



        return response()->json([
            'status'        => 'success',
            'homepage_data' => $homePage,
            'offers'        => $offers,
        ]);
    }
    public function homeSliders()
    {
        $data = Slider::where('status', 'active')->latest('id')->get()->map(function ($slider) {
            $slider->image = url('storage/' . $slider->image); // or Storage::url()
            return $slider;
        });
        return response()->json([
            'status' => 'success',
            'data'   => $data,
            'count'  => $data->count(),
        ]);
    }
    public function homeBanners()
    {
        $banner = Banner::where('status', 'active')->latest('id')->first();

        if ($banner) {
            $banner->image_one   = url('storage/' . $banner->image_one);
            $banner->image_two   = url('storage/' . $banner->image_two);
            $banner->image_three = url('storage/' . $banner->image_three);
        }

        return response()->json([
            'status' => 'success',
            'data'   => $banner,
        ]);
    }

    public function allCoupons()
    {
        $today = Carbon::now()->format('Y-m-d');
        $coupons = Coupon::where('status', 'active')
            ->where(function ($query) use ($today) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', $today);
            })
            ->latest()
            ->get()
            ->map(function ($coupon) {
                // Decode JSON arrays
                $coupon->description       = html_entity_decode(strip_tags($coupon->description));
                $coupon->short_description = html_entity_decode(strip_tags($coupon->short_description));
                $coupon->locations         = html_entity_decode($coupon->locations);
                $coupon->map_url           = html_entity_decode($coupon->map_url);

                $countryIds   = json_decode($coupon->country_id, true) ?? [];
                $divisionIds  = json_decode($coupon->division_id, true) ?? [];
                $cityIds      = json_decode($coupon->city_id, true) ?? [];
                $areaIds      = json_decode($coupon->area_id, true) ?? [];
                $notifyToIds  = json_decode($coupon->notify_to, true) ?? [];
                $addedToId    = json_decode($coupon->added_by, true) ?? [];
                $categoryToId = json_decode($coupon->category_id, true) ?? [];
                $brandToId    = json_decode($coupon->brand_id, true) ?? [];
                $storeToId    = json_decode($coupon->store_id, true) ?? [];

                // Fetch names from DB (assuming related tables exist)
                $coupon->countries     = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
                $coupon->divisions     = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
                $coupon->cities        = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
                $coupon->areas         = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
                $coupon->notify_to     = DB::table('admins')->whereIn('id', $notifyToIds)->pluck('name');
                $coupon->added_by_name = DB::table('admins')->where('id', $addedToId)->pluck('name');
                $coupon->category_name = DB::table('categories')->where('id', $categoryToId)->pluck('name');
                $coupon->brand_name    = DB::table('brands')->where('id', $brandToId)->pluck('name');
                $coupon->store_name    = DB::table('stores')->where('id', $storeToId)->pluck('title');

                // Fix image URLs
                $coupon->logo         = url('storage/' . $coupon->logo);
                $coupon->image        = url('storage/' . $coupon->image);
                $coupon->banner_image = url('storage/' . $coupon->banner_image);

                return $coupon;
            });

        return response()->json([
            'status' => 'success',
            'data'   => $coupons,
            'count'  => $coupons->count(),
        ]);
    }
    public function allOffers(Request $request)
    {
        $paginate = $request->input('paginate', 10); // Default to 10 if not provided
        $today = Carbon::now()->format('Y-m-d');
        $offers = Offer::where('status', 'active')
            ->where(function ($query) use ($today) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', $today);
            })
            ->latest()
            ->paginate($paginate)
            ->map(function ($offer) {
                // Decode JSON arrays
                $offer->description       = html_entity_decode(strip_tags($offer->description));
                $offer->short_description = html_entity_decode(strip_tags($offer->short_description));
                $offer->locations         = html_entity_decode($offer->locations);
                $offer->map_url           = html_entity_decode($offer->map_url);

                $countryIds               = json_decode($offer->country_id, true) ?? [];
                $divisionIds              = json_decode($offer->division_id, true) ?? [];
                $cityIds                  = json_decode($offer->city_id, true) ?? [];
                $areaIds                  = json_decode($offer->area_id, true) ?? [];
                $notifyToIds              = json_decode($offer->notify_to, true) ?? [];
                $addedToId                = json_decode($offer->added_by, true) ?? [];
                $categoryToId             = json_decode($offer->category_id, true) ?? [];
                $brandToId                = json_decode($offer->brand_id, true) ?? [];
                $storeToId                = json_decode($offer->store_id, true) ?? [];

                // Fetch names from DB (assuming related tables exist)
                $offer->countries         = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
                $offer->divisions         = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
                $offer->cities            = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
                $offer->areas             = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
                $offer->notify_to         = DB::table('admins')->whereIn('id', $notifyToIds)->pluck('name');
                $offer->added_by_name     = DB::table('admins')->where('id', $addedToId)->value('name');
                $offer->category_name     = DB::table('categories')->where('id', $categoryToId)->value('name');
                $offer->brand_name        = DB::table('brands')->where('id', $brandToId)->value('name');
                $offer->store_name        = DB::table('stores')->where('id', $storeToId)->value('title');

                // Fix image URLs
                $offer->logo         = url('storage/' . $offer->logo);
                $offer->image        = url('storage/' . $offer->image);
                $offer->banner_image = url('storage/' . $offer->banner_image);

                return $offer;
            });

        return response()->json([
            'status' => 'success',
            'data'   => $offers,
            'count'  => $offers->count(),
        ]);
    }

    public function allStore()
    {
        $stores = Store::with(['country', 'division', 'city', 'area', 'brand', 'category'])
            ->where('status', 'active')
            ->latest()
            ->get();

        $stores = $stores->map(function ($store) {
            $store->description  = html_entity_decode(strip_tags($store->description));
            $store->location     = html_entity_decode(strip_tags($store->location));
            $store->url          = html_entity_decode($store->url);

            // Attach readable names via relationships (use optional() for nullables)
            $store->country_name  = optional($store->country)->name;
            $store->division_name = optional($store->division)->name;
            $store->city_name     = optional($store->city)->name;
            $store->area_name     = optional($store->area)->name;
            $store->brand_name    = optional($store->brand)->name;
            $store->category_name = optional($store->category)->name;

            // Fix image URLs
            $store->logo         = $store->logo ? url('storage/' . $store->logo) : null;
            $store->image        = $store->image ? url('storage/' . $store->image) : null;
            $store->banner_image = $store->banner_image ? url('storage/' . $store->banner_image) : null;

            // Remove unnecessary attributes
            unset(
                $store->added_by,
                $store->update_by,
                $store->created_at,
                $store->updated_at
            );

            return $store;
        });

        // Optionally, include brand info if needed from first store’s brand
        $brandInfo = null;
        if ($stores->isNotEmpty() && $stores[0]->brand) {
            $brand = $stores[0]->brand;
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            $brand->countries     = DB::table('countries')->whereIn('id', json_decode($brand->country_id, true) ?? [])->pluck('name');
            $brand->divisions     = DB::table('divisions')->whereIn('id', json_decode($brand->division_id, true) ?? [])->pluck('name');
            $brand->cities        = DB::table('cities')->whereIn('id', json_decode($brand->city_id, true) ?? [])->pluck('name');
            $brand->areas         = DB::table('areas')->whereIn('id', json_decode($brand->area_id, true) ?? [])->pluck('name');
            $brand->added_by_name = DB::table('admins')->where('id', $brand->added_by)->value('name');
            $brand->category_name = DB::table('categories')->where('id', $brand->category_id)->value('name');

            $brand->logo                = $brand->logo ? url('storage/' . $brand->logo) : null;
            $brand->image               = $brand->image ? url('storage/' . $brand->image) : null;
            $brand->banner_image        = $brand->banner_image ? url('storage/' . $brand->banner_image) : null;
            $brand->middle_banner_left  = $brand->middle_banner_left ? url('storage/' . $brand->middle_banner_left) : null;
            $brand->middle_banner_right = $brand->middle_banner_right ? url('storage/' . $brand->middle_banner_right) : null;

            $brandInfo = $brand;
        }

        return response()->json([
            'status' => 'success',
            'data'   => [
                'brand'  => $brandInfo,
                'stores' => $stores,
            ]
        ]);
    }


    public function allBrands(Request $request)
    {
        $paginate = $request->input('paginate', 10); // Default to 10
        $brands = Brand::where('status', 'active')->latest()->paginate($paginate);

        $brands->getCollection()->transform(function ($brand) {
            // Decode HTML & strip tags
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            // Decode JSON arrays
            $countryIds   = json_decode($brand->country_id, true) ?? [];
            $divisionIds  = json_decode($brand->division_id, true) ?? [];
            $cityIds      = json_decode($brand->city_id, true) ?? [];
            $areaIds      = json_decode($brand->area_id, true) ?? [];
            $addedToId    = json_decode($brand->added_by, true) ?? [];
            $categoryToId = json_decode($brand->category_id, true) ?? [];

            // Related names
            $brand->countries      = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $brand->divisions      = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $brand->cities         = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $brand->areas          = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $brand->added_by_name  = DB::table('admins')->where('id', $addedToId)->value('name');
            $brand->category_name  = DB::table('categories')->where('id', $categoryToId)->value('name');

            // Image URLs
            $brand->logo                = url('storage/' . $brand->logo);
            $brand->image               = url('storage/' . $brand->image);
            $brand->banner_image        = url('storage/' . $brand->banner_image);
            $brand->middle_banner_left  = url('storage/' . $brand->middle_banner_left);
            $brand->middle_banner_right = url('storage/' . $brand->middle_banner_right);

            return $brand;
        });

        return response()->json([
            'status' => 'success',
            'data'   => $brands,
            'count'  => $brands->total(), // total count of records
        ]);
    }

    public function offerDetails($slug)
    {
        $offer = Offer::where('slug', $slug)->first();
        $brand = Brand::where('id', $offer->brand_id)->first();
        if ($offer) {
            $offer->description       = html_entity_decode(strip_tags($offer->description));
            $offer->short_description = html_entity_decode(strip_tags($offer->short_description));
            $offer->locations         = html_entity_decode($offer->locations);
            $offer->map_url           = html_entity_decode($offer->map_url);

            $countryIds   = json_decode($offer->country_id, true) ?? [];
            $divisionIds  = json_decode($offer->division_id, true) ?? [];
            $cityIds      = json_decode($offer->city_id, true) ?? [];
            $areaIds      = json_decode($offer->area_id, true) ?? [];
            $notifyToIds  = json_decode($offer->notify_to, true) ?? [];
            $addedToId    = json_decode($offer->added_by, true) ?? [];
            $categoryToId = json_decode($offer->category_id, true) ?? [];
            $brandToId    = json_decode($offer->brand_id, true) ?? [];
            $storeToId    = json_decode($offer->store_id, true) ?? [];

            // Fetch names from DB (assuming related tables exist)
            $offer->countries     = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $offer->divisions     = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $offer->cities        = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $offer->areas         = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $offer->notify_to     = DB::table('admins')->whereIn('id', $notifyToIds)->pluck('name');
            $offer->added_by_name = DB::table('admins')->where('id', $addedToId)->value('name');
            $offer->category_name = DB::table('categories')->where('id', $categoryToId)->value('name');
            $offer->brand_name    = DB::table('brands')->where('id', $brandToId)->value('name');
            $offer->store_name    = DB::table('stores')->where('id', $storeToId)->value('title');

            // Fix image URLs
            $offer->logo         = url('storage/' . $offer->logo);
            $offer->image        = url('storage/' . $offer->image);
            $offer->banner_image = url('storage/' . $offer->banner_image);
        }
        if ($brand) {
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            // $brand->url               = html_entity_decode(strip_tags($brand->url));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            $countryIds   = json_decode($brand->country_id, true) ?? [];
            $divisionIds  = json_decode($brand->division_id, true) ?? [];
            $cityIds      = json_decode($brand->city_id, true) ?? [];
            $areaIds      = json_decode($brand->area_id, true) ?? [];
            $addedToId    = json_decode($brand->added_by, true) ?? [];
            $categoryToId = json_decode($brand->category_id, true) ?? [];

            // Fetch names from DB (assuming related tables exist)
            $brand->countries     = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $brand->divisions     = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $brand->cities        = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $brand->areas         = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $brand->added_by_name = DB::table('admins')->where('id', $addedToId)->pluck('name');
            $brand->category_name = DB::table('categories')->where('id', $categoryToId)->pluck('name');

            // Fix image URLs
            $brand->logo                = url('storage/' . $brand->logo);
            $brand->image               = url('storage/' . $brand->image);
            $brand->banner_image        = url('storage/' . $brand->banner_image);
            $brand->middle_banner_left  = url('storage/' . $brand->middle_banner_left);
            $brand->middle_banner_right = url('storage/' . $brand->middle_banner_right);
        }
        $data = [
            'brand' => $brand,
            'offer' => $offer,
        ];

        return response()->json([
            'status' => 'success',
            'data'   => $data,
        ]);
    }

    public function brandOverview($slug)
    {
        $brand = Brand::where('slug', $slug)->first();

        if ($brand) {
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            $countryIds               = json_decode($brand->country_id, true) ?? [];
            $divisionIds              = json_decode($brand->division_id, true) ?? [];
            $cityIds                  = json_decode($brand->city_id, true) ?? [];
            $areaIds                  = json_decode($brand->area_id, true) ?? [];
            $addedToId                = json_decode($brand->added_by, true) ?? [];
            $categoryToId             = json_decode($brand->category_id, true) ?? [];

            // Fetch names from DB (assuming related tables exist)
            $brand->countries         = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $brand->divisions         = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $brand->cities            = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $brand->areas             = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $brand->added_by_name     = DB::table('admins')->where('id', $addedToId)->value('name');
            $brand->category_name     = DB::table('categories')->where('id', $categoryToId)->value('name');

            // Fix image URLs
            $brand->logo                = url('storage/' . $brand->logo);
            $brand->image               = url('storage/' . $brand->image);
            $brand->banner_image        = url('storage/' . $brand->banner_image);
            $brand->middle_banner_left  = url('storage/' . $brand->middle_banner_left);
            $brand->middle_banner_right = url('storage/' . $brand->middle_banner_right);
        }

        return response()->json([
            'status' => 'success',
            'data'   => $brand,
        ]);
    }

    public function brandStores($slug)
    {
        $brand  = Brand::with('stores')->where('slug', $slug)->first();
        $stores = $brand->stores;

        if ($brand) {
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            $countryIds               = json_decode($brand->country_id, true) ?? [];
            $divisionIds              = json_decode($brand->division_id, true) ?? [];
            $cityIds                  = json_decode($brand->city_id, true) ?? [];
            $areaIds                  = json_decode($brand->area_id, true) ?? [];
            $addedToId                = json_decode($brand->added_by, true) ?? [];
            $categoryToId             = json_decode($brand->category_id, true) ?? [];

            // Fetch names from DB (assuming related tables exist)
            $brand->countries         = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $brand->divisions         = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $brand->cities            = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $brand->areas             = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $brand->added_by_name     = DB::table('admins')->where('id', $addedToId)->value('name');
            $brand->category_name     = DB::table('categories')->where('id', $categoryToId)->value('name');

            // Fix image URLs
            $brand->logo                = url('storage/' . $brand->logo);
            $brand->image               = url('storage/' . $brand->image);
            $brand->banner_image        = url('storage/' . $brand->banner_image);
            $brand->middle_banner_left  = url('storage/' . $brand->middle_banner_left);
            $brand->middle_banner_right = url('storage/' . $brand->middle_banner_right);
        }
        $stores->map(function ($store) {
            $store->description = html_entity_decode(strip_tags($store->description));
            $store->location    = html_entity_decode(strip_tags($store->location));
            $store->url         = html_entity_decode($store->url);
            $countryIds         = json_decode($store->country_id, true) ?? [];
            $divisionIds        = json_decode($store->division_id, true) ?? [];
            $cityIds            = json_decode($store->city_id, true) ?? [];
            $areaIds            = json_decode($store->area_id, true) ?? [];
            $brandIds           = json_decode($store->brand_id, true) ?? [];
            $categoryIds        = json_decode($store->category_id, true) ?? [];
            $store->country     = DB::table('countries')->where('id', $countryIds)->value('name');
            $store->division    = DB::table('divisions')->where('id', $divisionIds)->value('name');
            $store->city        = DB::table('cities')->where('id', $cityIds)->value('name');
            $store->area        = DB::table('areas')->where('id', $areaIds)->value('name');
            $store->brand       = DB::table('brands')->where('id', $brandIds)->value('name');
            $store->category    = DB::table('categories')->where('id', $categoryIds)->value('name');
            unset(
                $store->logo,
                $store->image,
                $store->banner_image,
                $store->added_by,
                $store->update_by,
                $store->category,
                $store->created_at,
                $store->updated_at,
                // $store->category,
            );
            return $store;
        });
        $data = [
            'brand'       => $brand,
            'stores'      => $stores,
        ];
        return response()->json([
            'status' => 'success',
            'data'   => $data,
        ]);
    }
    public function brandOffers($slug)
    {
        $brand  = Brand::with('offers')->where('slug', $slug)->first();
        $offers = $brand->offers;

        if ($brand) {
            $brand->about             = html_entity_decode(strip_tags($brand->about));
            $brand->description       = html_entity_decode(strip_tags($brand->description));
            $brand->offer_description = html_entity_decode(strip_tags($brand->offer_description));
            $brand->location          = html_entity_decode($brand->location);
            $brand->url               = html_entity_decode($brand->url);

            $countryIds               = json_decode($brand->country_id, true) ?? [];
            $divisionIds              = json_decode($brand->division_id, true) ?? [];
            $cityIds                  = json_decode($brand->city_id, true) ?? [];
            $areaIds                  = json_decode($brand->area_id, true) ?? [];
            $addedToId                = json_decode($brand->added_by, true) ?? [];
            $categoryToId             = json_decode($brand->category_id, true) ?? [];

            // Fetch names from DB (assuming related tables exist)
            $brand->countries         = DB::table('countries')->whereIn('id', $countryIds)->pluck('name');
            $brand->divisions         = DB::table('divisions')->whereIn('id', $divisionIds)->pluck('name');
            $brand->cities            = DB::table('cities')->whereIn('id', $cityIds)->pluck('name');
            $brand->areas             = DB::table('areas')->whereIn('id', $areaIds)->pluck('name');
            $brand->added_by_name     = DB::table('admins')->where('id', $addedToId)->value('name');
            $brand->category_name     = DB::table('categories')->where('id', $categoryToId)->value('name');

            // Fix image URLs
            $brand->logo                = url('storage/' . $brand->logo);
            $brand->image               = url('storage/' . $brand->image);
            $brand->banner_image        = url('storage/' . $brand->banner_image);
            $brand->middle_banner_left  = url('storage/' . $brand->middle_banner_left);
            $brand->middle_banner_right = url('storage/' . $brand->middle_banner_right);
        }
        $offers->map(function ($offer) {
            $offer->description = html_entity_decode(strip_tags($offer->description));
            $offer->location    = html_entity_decode(strip_tags($offer->location));
            $offer->url         = html_entity_decode($offer->url);
            $countryIds         = json_decode($offer->country_id, true) ?? [];
            $divisionIds        = json_decode($offer->division_id, true) ?? [];
            $cityIds            = json_decode($offer->city_id, true) ?? [];
            $areaIds            = json_decode($offer->area_id, true) ?? [];
            $brandIds           = json_decode($offer->brand_id, true) ?? [];
            $categoryIds        = json_decode($offer->category_id, true) ?? [];
            $offer->country     = DB::table('countries')->where('id', $countryIds)->value('name');
            $offer->division    = DB::table('divisions')->where('id', $divisionIds)->value('name');
            $offer->city        = DB::table('cities')->where('id', $cityIds)->value('name');
            $offer->area        = DB::table('areas')->where('id', $areaIds)->value('name');
            $offer->brand       = DB::table('brands')->where('id', $brandIds)->value('name');
            $offer->category    = DB::table('categories')->where('id', $categoryIds)->value('name');
            unset(
                $offer->logo,
                $offer->image,
                $offer->banner_image,
                $offer->added_by,
                $offer->update_by,
                $offer->category,
                $offer->created_at,
                $offer->updated_at,
                // $offer->category,
            );
            return $offer;
        });
        $data = [
            'brand'       => $brand,
            'offers'      => $offers,
        ];
        return response()->json([
            'status' => 'success',
            'data'   => $data,
        ]);
    }

    public function aboutUs()
    {
        $pageBanner = PageBanner::where('page_name', 'about')->latest('id')->first();
        $about = AboutUs::latest('id')->first();
        $brands = Brand::latest()->get();

        return response()->json([
            'page_banner' => $pageBanner,
            'about' => $about,
            'brands' => $brands,
        ]);
    }
    public function websiteInformations()
    {
        $setting = Setting::latest()->first();

        return response()->json([
            'status' => 'success',
            'data' => $setting,
        ]);
    }
    public function frequentlyAsked()
    {
        $page_banner = PageBanner::where('page_name', 'faq')->latest('id')->first();
        if ($page_banner) {
            $page_banner->image = url('storage/' . $page_banner->image);
        }
        $faqs         = Faq::where('status', 'active')->orderBy('order', 'ASC')->get();
        $faqs->map(function ($faq) {
            $faq->question = html_entity_decode(strip_tags($faq->question));
            $faq->answer   = html_entity_decode(strip_tags($faq->answer));
            return $faq;
        });

        return response()->json([
            'status' => 'success',
            'page_banner' => $page_banner,
            'data'   => $faqs,
            'count'  => $faqs->count(),
        ]);
    }
    public function termsCondition()
    {
        $page_banner = PageBanner::where('page_name', 'terms')->latest('id')->first();
        if ($page_banner) {
            $page_banner->image = url('storage/' . $page_banner->image);
        }
        $terms         = TermsAndCondition::where('status', 'active')->latest('id')->first();
        $terms->terms  = html_entity_decode(strip_tags($terms->terms));

        return response()->json([
            'status' => 'success',
            'page_banner' => $page_banner,
            'data'   => $terms,
        ]);
    }
    public function privacyPolicy()
    {
        $page_banner = PageBanner::where('page_name', 'privacy')->latest('id')->first();
        if ($page_banner) {
            $page_banner->image = url('storage/' . $page_banner->image);
        }
        $terms         = PrivacyPolicy::where('status', 'active')->latest('id')->first();
        $terms->terms  = html_entity_decode(strip_tags($terms->terms));

        return response()->json([
            'status' => 'success',
            'page_banner' => $page_banner,
            'data'   => $terms,
        ]);
    }
    public function allDivision()
    {
        $divisions = DB::table('divisions')->where('status', 'active')->get();
        return response()->json([
            'status' => 'success',
            'data'   => $divisions,
            'count'  => $divisions->count(),
        ]);
    }
    public function getCitiesByDivision($slug)
    {
        $division = Division::with('cities')->where('slug', $slug)->first();
        return response()->json([
            'status' => 'success',
            'division'   => $division,
            'cities_count'  => $division->cities->count(),
        ]);
    }
    public function getAreasByCity($slug)
    {
        $city = City::with('areas')->where('slug', $slug)->first();
        return response()->json([
            'status' => 'success',
            'city'   => $city,
            'areas_count'  => $city->areas->count(),
        ]);
    }

    public function searchSuggestions(Request $request)
    {
        $request->validate(['search' => 'required']);
        $query = $request->search;
        $today = Carbon::now()->format('Y-m-d');

        // Get suggestions for brands
        $brandSuggestions = Brand::where('status', 'active')
            ->where('name', 'LIKE', '%' . $query . '%')
            ->select('id', 'name', 'slug')
            ->limit(10)
            ->get()
            ->map(fn($item) => [
                'id'         => $item->id,
                'brand_name' => $item->name,
                'brand_slug' => $item->slug,
                'type'       => 'brand',
            ]);

        // Get suggestions for offers
        $offerSuggestions = Offer::where('status', 'active')
            ->where(function ($q) use ($today) {
                $q->whereNull('expiry_date')->orWhere('expiry_date', '>=', $today);
            })
            ->where('name', 'LIKE', '%' . $query . '%')
            ->select('id', 'name', 'slug')
            ->limit(10)
            ->get()
            ->map(fn($item) => [
                'id'         => $item->id,
                'offer_name' => $item->name,
                'offer_slug' => $item->slug,
                'type'       => 'offer',
            ]);

        // Get suggestions for stores
        $storeSuggestions = Store::where('status', 'active')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->select('id', 'title as name', 'slug')
            ->limit(10)
            ->get()
            ->map(fn($item) => [
                'id'         => $item->id,
                'store_name' => $item->name,
                'brand_slug' => optional($item->brand)->slug,
                'brand'      => optional($item->brand)->name,
                'type'       => 'store',
            ]);

        // Combine and return
        $suggestions = $brandSuggestions
            ->merge($offerSuggestions)
            ->merge($storeSuggestions)
            ->values();

        return response()->json([
            'status'      => 'success',
            'suggestions' => $suggestions,
        ]);
    }

    public function globalSearch(Request $request)
    {
        $request->validate(['search' => 'required']);
        $search = $request->input('search');
        $today  = Carbon::now()->format('Y-m-d');

        // Brand search
        $brands = Brand::where('name', 'LIKE', "%{$search}%")
            ->where('status', 'active')
            ->limit(10)
            ->get()
            ->map(function ($brand) {
                return [
                    'brand_name'     => $brand->name,
                    'brand_slug'     => $brand->slug,
                    'brand_image'    => url('storage/' . $brand->logo),
                    'type'     => 'brand',
                ];
            });

        // Offer search
        $offers = Offer::where('name', 'LIKE', "%{$search}%")
            ->where('status', 'active')
            ->where(function ($query) use ($today) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', $today);
            })
            ->limit(10)
            ->get()
            ->map(function ($offer) {
                return [
                    'offer_name'     => $offer->name,
                    'offer_slug'     => $offer->slug,
                    'offer_image'    => url('storage/' . $offer->image),
                    'brand_logo'     => url('storage/' . optional($offer->brand)->logo),
                    'price'          => $offer->price ?? null,
                    'offer price'    => $offer->offer_price ?? null,
                    'offer_validity' => $offer->expiry_date ?? 'No Expiry',
                    'type'           => 'offer',
                ];
            });

        // Store search
        $stores = Store::where('title', 'LIKE', "%{$search}%")
            ->where('status', 'active')
            ->limit(10)
            ->get()
            ->map(function ($store) {
                return [
                    'store_name' => $store->title,
                    'brand_slug' => optional($store->brand)->slug,
                    'brand'      => optional($store->brand)->name,
                    'type'       => 'store',
                ];
            });

        $mergedResults = $brands->merge($offers)->merge($stores);

        return response()->json([
            'status' => 'success',
            'brand'  => $brands,
            'offer'  => $offers,
            'store'  => $stores,
            'count'  => $mergedResults->count(),
        ]);
    }
}

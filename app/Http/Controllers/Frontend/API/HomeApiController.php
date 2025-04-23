<?php

namespace App\Http\Controllers\Frontend\API;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Banner;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Setting;
use App\Models\HomePage;
use App\Models\PageBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;

class HomeApiController extends Controller
{
    public function homePage()
    {
        $homePage = HomePage::with('brand')->latest('id')->first();

        if ($homePage) {
            $homePage->image_one   = url('storage/' . $homePage->image_one);
            $homePage->image_two   = url('storage/' . $homePage->image_two);
            $homePage->image_three = url('storage/' . $homePage->image_three);
        }

        return response()->json([
            'status' => 'success',
            'data'   =>  $homePage,
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
    public function allOffers()
    {
        $today = Carbon::now()->format('Y-m-d');
        $offers = Offer::where('status', 'active')
            ->where(function ($query) use ($today) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', $today);
            })
            ->latest()
            ->get()
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

    public function allBrands()
    {
        $brands = Brand::where('status', 'active')->latest()->get()
            ->map(function ($brand) {
                // Decode JSON arrays
                $brand->about             = html_entity_decode(strip_tags($brand->about));
                $brand->description       = html_entity_decode(strip_tags($brand->description));
                // $brand->url            = html_entity_decode(strip_tags($brand->url));
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

                return $brand;
            });

        return response()->json([
            'status' => 'success',
            'data'   => $brands,
            'count'  => $brands->count(),
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
    public function getCitiesByDivision($id)
    {
        $cities = DB::table('cities')->where('division_id', $id)->where('status', 'active')->get();
        return response()->json([
            'status' => 'success',
            'data'   => $cities,
            'count'  => $cities->count(),
        ]);
    }
}

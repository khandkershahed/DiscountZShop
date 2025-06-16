<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Api\UserApiController;
use App\Http\Controllers\Frontend\API\HomeApiController;
use App\Http\Controllers\Admin\Api\CategoryApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/





Route::prefix('api')->group(function () {

    // Route::post('/register', [UserApiController::class, 'register']);
    // Route::post('/login', [UserApiController::class, 'login']);
    // Route::post('/reset-password/{token}', [UserApiController::class, 'reset']);
    // Route::post('/forgot-password', [UserApiController::class, 'forgotPassword']);

    // Route::middleware('auth:sanctum')->group(function () {
    //     Route::post('/logout', [UserApiController::class, 'logout']);
    //     Route::get('/email-verification', [UserApiController::class, 'sendemailVerification']);
    //     Route::post('/email-verification', [UserApiController::class, 'emailVerification']);
    //     Route::post('/change-password', [UserApiController::class, 'updatePassword']);
    //     Route::get('/profile', [UserApiController::class, 'profile']);
    //     Route::put('/profile', [UserApiController::class, 'editProfile']);
    // });

    // Route::get('/register', [UserApiController::class, 'register']);
    // Route::get('/login', [UserApiController::class, 'login']);
    Route::post('/register', [UserApiController::class, 'register']);
    Route::post('/login', [UserApiController::class, 'login']);
    Route::post('/reset-password/{token}', [UserApiController::class, 'reset']);
    Route::post('/forgot-password', [UserApiController::class, 'forgotPassword']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [UserApiController::class, 'logout']);
        Route::get('/email-verification', [UserApiController::class, 'sendemailVerification']);
        Route::post('/email-verification', [UserApiController::class, 'emailVerification']);
        Route::post('/change-password', [UserApiController::class, 'updatePassword']);
        Route::get('/profile', [UserApiController::class, 'profile']);
        Route::put('/profile', [UserApiController::class, 'editProfile']);
    });

    // Home
    Route::get('/homepage', [HomeApiController::class, 'homePage']);
    Route::get('/home-sliders', [HomeApiController::class, 'homeSliders']);
    Route::get('/home-banners', [HomeApiController::class, 'homeBanners']);
    Route::get('/coupons-all', [HomeApiController::class, 'allCoupons']);
    Route::get('/brands-all', [HomeApiController::class, 'allBrands']);
    Route::get('/categories', [HomeApiController::class, 'allCategories']);
    Route::get('/category/{slug}', [HomeApiController::class, 'categoryDetails']);


    // Offers
    Route::get('/offers-all', [HomeApiController::class, 'allOffers']);
    Route::get('/offers/search', [HomeApiController::class, 'searchOfferName']);
    Route::get('/offers/search/mobile', [HomeApiController::class, 'searchOfferNameMobile']);

    // Brand


    // About
    Route::get('/website-informations', [HomeApiController::class, 'websiteInformations']);
    Route::get('/about', [HomeApiController::class, 'aboutUs']);

    // Contact
    Route::get('/contact', [HomeApiController::class, 'contactUs']);
    // Route::post('/contact', [ContactApiController::class, 'store']);

    // Wishlist
    Route::get('/wishlist', [HomeApiController::class, 'wishlist']);
    Route::post('/wishlist', [HomeApiController::class, 'AddToWishlist']);
    Route::get('/wishlist/products', [HomeApiController::class, 'WishlistProduct']);
    Route::get('/wishlist/get', [HomeApiController::class, 'GetWishlist']);
    Route::delete('/wishlist/{rowId}', [HomeApiController::class, 'remove']);


    // Product Search
    Route::post('/search', [HomeApiController::class, 'productSearch']);
    Route::post('/search/suggestions', [HomeApiController::class, 'searchSuggestions']);

    // Global Search
    Route::get('/search-suggestions', [HomeApiController::class, 'searchSuggestions']);
    Route::get('/global-search', [HomeApiController::class, 'globalSearch']);

    // Deal Search
    Route::get('/deal/search', [HomeApiController::class, 'searchDeal']);

    // Brands
    Route::get('/brands/search', [HomeApiController::class, 'searchAllBrands']);

    // Map Search
    Route::get('/map/divisions', [HomeApiController::class, 'mapDivision']);
    Route::get('/map/cities', [HomeApiController::class, 'mapCity']);

    // Coupons
    Route::get('/coupons', [HomeApiController::class, 'allCoupon']);
    Route::get('/coupons/{slug}', [HomeApiController::class, 'couponDetails']);
    Route::get('/coupons/search', [HomeApiController::class, 'searchCouponName']);


    Route::get('/divisions', [HomeApiController::class, 'allDivision']);
    Route::get('/division/{slug}/cities', [HomeApiController::class, 'getCitiesByDivision']);
    Route::get('/city/{slug}/areas', [HomeApiController::class, 'getAreasByCity']);

    // Store
    Route::get('/stores', [HomeApiController::class, 'allStore']);
    Route::get('/stores/{id}', [HomeApiController::class, 'storeDetails']);
    Route::get('/stores/search', [HomeApiController::class, 'searchStoreName']);
    Route::get('/stores/area/{area_id}', [HomeApiController::class, 'filterByArea']);

    // Terms and Privacy
    Route::get('/terms-and-conditions', [HomeApiController::class, 'termsCondition']);
    Route::get('/privacy', [HomeApiController::class, 'privacyPolicy']);

    // Wallet & FAQ
    Route::get('/wallet', [HomeApiController::class, 'wallet']);
    Route::get('/faq', [HomeApiController::class, 'frequentlyAsked']);


    Route::get('/brand/{slug}', [HomeApiController::class, 'brandOverview']);
    Route::get('/brand/{slug}/stores', [HomeApiController::class, 'brandStores']);
    Route::get('/brand/{slug}/offers', [HomeApiController::class, 'brandOffers']);
    Route::get('/offer-details/{slug}', [HomeApiController::class, 'offerDetails']);
});

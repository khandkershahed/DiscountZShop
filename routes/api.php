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

    Route::post('/register', [UserApiController::class, 'register']);
    Route::post('/login', [UserApiController::class, 'login']);
    Route::post('/reset-password/{token}', [UserApiController::class, 'reset']);
    Route::post('/forgot-password', [UserApiController::class, 'forgotPassword']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [UserApiController::class, 'logout']);
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


    Route::get('/division/{id}/cities', [HomeApiController::class, 'GetCheckDivision']);
    Route::get('/city/{id}/states', [HomeApiController::class, 'StateGetAjaxCity']);
    Route::get('/division/{id}/districts', [HomeApiController::class, 'GetCheckDistrict']);
    Route::get('/city/{id}/areas', [HomeApiController::class, 'StateGetAjax']);

    // Store
    Route::get('/stores', [HomeApiController::class, 'allStore']);
    Route::get('/stores/{id}', [HomeApiController::class, 'storeDetails']);
    Route::get('/stores/search', [HomeApiController::class, 'searchStoreName']);
    Route::get('/stores/area/{area_id}', [HomeApiController::class, 'filterByArea']);

    // Terms and Privacy
    Route::get('/terms', [HomeApiController::class, 'discounttermsCondition']);
    Route::get('/privacy', [HomeApiController::class, 'discountprivacyPolicy']);

    // Wallet & FAQ
    Route::get('/wallet', [HomeApiController::class, 'wallet']);
    Route::get('/faq', [HomeApiController::class, 'frequentlyAsked']);


    Route::get('/brand/{slug}', [HomeApiController::class, 'brandOverview']);
    Route::get('/brand/{slug}/stores', [HomeApiController::class, 'brandStores']);
    Route::get('/brand/{slug}/offers', [HomeApiController::class, 'brandOffers']);
    Route::get('/offer-details/{slug}', [HomeApiController::class, 'offerDetails']);
});

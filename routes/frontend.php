<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');

//About
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');

//Contact
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.add');

//WishList
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::post('/add-to-wishlist', [HomeController::class, 'AddToWishlist']);
Route::get('/get-wishlist', [HomeController::class, 'GetWishlist']);
Route::get('/wishlist-product', [HomeController::class, 'WishlistProduct'])->name('wishlist.product');
Route::get('/wishlist/product/remove/{rowId}', [HomeController::class, 'RemoveWishlistTemplateOne']);

//Email
Route::post('email/subscribe', [NewsletterController::class, 'store'])->name('email.subscribe');

//SubCatewory
Route::get('/subcategory/{slug}', [HomeController::class, 'categoryDetails'])->name('subcategory.details');



//product Search
Route::post('/search', [HomeController::class, 'productSearch'])->name('product.search');
// In web.php or routes file
Route::post('/product/search/suggest', [HomeController::class, 'searchSuggestions'])->name('product.search.suggest');

//Homepage Deal Search
Route::get('/deal/search', [HomeController::class, 'searchDeal'])->name('deal.search');

//Brand All Route Start
Route::get('/brands/all', [HomeController::class, 'allBrand'])->name('allBrand');
Route::get('/brands/all/search', [HomeController::class, 'searchAllBrands'])->name('brands.all.search.name');
//Brand All Route End

// Route::get('/brands/search/offer', [HomeController::class, 'searchBrandName'])->name('brands.search.name');
Route::get('/{brand}', [HomeController::class, 'vendorOverview'])->name('brand.details');
Route::get('/{brand}/stores', [HomeController::class, 'vendorStores'])->name('vendor.stores');

Route::get('/{brand}/offers', [HomeController::class, 'vendorOffers'])->name('vendor.offers');

Route::get('/map/search/division', [HomeController::class, 'mapDivision'])->name('map.division');
Route::get('/map/search/city', [HomeController::class, 'mapCity'])->name('map.city');

// Route::get('/brand/{slug}', [HomeController::class, 'brandDetails'])->name('brand.details');

//Coupon
Route::get('/coupon/all', [HomeController::class, 'allCoupon'])->name('allCoupon');
Route::get('/coupon/{slug}', [HomeController::class, 'couponDetails'])->name('coupon.details');
Route::get('/coupon/search', [HomeController::class, 'searchCouponName'])->name('coupon.search');

//Offer All Route Start
Route::get('/offers/all', [HomeController::class, 'allOffer'])->name('allOffer');
Route::get('/offer-details/{slug}', [HomeController::class, 'offerDetails'])->name('offer.details');

Route::get('/offer/search/name', [HomeController::class, 'searchOfferName'])->name('offer.search.names');

Route::controller(HomeController::class)->group(function () {

    Route::get('/division-get/ajax/{division_id}', 'GetCheckDivision');
    Route::get('/city-get/ajax/{city_id}', 'StateGetAjaxCity');
});
//Offer All Route End

//Store All Route Start
Route::get('/store/all', [HomeController::class, 'allStore'])->name('allStore');
Route::get('/store/{id}', [HomeController::class, 'storeDetails'])->name('store.details');

Route::get('/store/search/name', [HomeController::class, 'searchStoreName'])->name('store.search.names');

Route::controller(HomeController::class)->group(function () {

    Route::get('/district-get/ajax/{division_id}', 'GetCheckDistrict');
    Route::get('/state-get/ajax/{city_id}', 'StateGetAjax');
});
//Store All Route End

//Terms
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');

//discounttermsCondition
Route::get('/discountZShop/terms-condition', [HomeController::class, 'discounttermsCondition'])->name('discount.termsCondition');

//Privacy
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/discountZShop/privacy-policy', [HomeController::class, 'discountprivacyPolicy'])->name('discount.privacy.policy');

Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');

//Faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/discountZShop/faq', [HomeController::class, 'faqDiscountZShop'])->name('discountZShop.faq');

Route::get('/vendors', [HomeController::class, 'vendors'])->name('vendors');

// Route::get('/brand/{id}/overview', [HomeController::class, 'vendorOverview'])->name('brand.details');
// Route::get('/brand/{id}/stores', [HomeController::class, 'vendorStores'])->name('vendor.stores');
// Route::get('/brand/{id}/offers', [HomeController::class, 'vendorOffers'])->name('vendor.offers');

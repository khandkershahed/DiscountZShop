<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\NewsletterController;

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');

//About
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');

//Contact
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.add');

//Email
Route::post('email/subscribe', [NewsletterController::class, 'store'])->name('email.subscribe');

//SubCatewory
Route::get('/subcategory/{slug}', [HomeController::class, 'categoryDetails'])->name('subcategory.details');

//Offer
Route::get('/offers/all', [HomeController::class, 'allOffer'])->name('allOffer');
Route::get('/offer-details/{slug}', [HomeController::class, 'offerDetails'])->name('offer.details');
Route::get('/offers/search', [HomeController::class, 'searchOfferName'])->name('offer.search');
Route::get('/offers/search/division', [HomeController::class, 'searchOfferDivisionName'])->name('offer.search.division');
Route::get('/offers/search/city', [HomeController::class, 'searchOfferCityName'])->name('offer.search.city');
Route::get('/offers/search/area', [HomeController::class, 'searchOfferAreaName'])->name('offer.search.area');

//Search
Route::post('/search', [HomeController::class, 'productSearch'])->name('product.search');

//WishList
Route::post('/add-to-wishlist', [HomeController::class, 'AddToWishlist']);
Route::get('/get-wishlist', [HomeController::class, 'GetWishlist']);
Route::get('/wishlist-product', [HomeController::class, 'WishlistProduct'])->name('wishlist.product');
Route::get('/wishlist/product/remove/{rowId}', [HomeController::class, 'RemoveWishlistTemplateOne']);


//Homepage Deal Search
Route::get('/deal/search', [HomeController::class, 'searchDeal'])->name('deal.search');


//Brand
Route::get('/brands/all', [HomeController::class, 'allBrand'])->name('allBrand');
Route::get('/brands/all/search', [HomeController::class, 'searchAllBrands'])->name('brands.all.search.name');

// Route::get('/brand/{slug}', [HomeController::class, 'brandDetails'])->name('brand.details');
Route::get('/brands/search/offer', [HomeController::class, 'searchBrandName'])->name('brands.search.name');

//Coupon
Route::get('/coupon/all', [HomeController::class, 'allCoupon'])->name('allCoupon');
Route::get('/coupon/{slug}', [HomeController::class, 'couponDetails'])->name('coupon.details');

//Store
Route::get('/store/all', [HomeController::class, 'allStore'])->name('allStore');
Route::get('/store/{id}', [HomeController::class, 'storeDetails'])->name('store.details');
Route::get('/store/search/offer', [HomeController::class, 'searchStoreName'])->name('store.search.name');
Route::get('/store/search/division', [HomeController::class, 'searchDivisionName'])->name('store.search.division');
Route::get('/store/search/city', [HomeController::class, 'searchCityName'])->name('store.search.city');
Route::get('/store/search/area', [HomeController::class, 'searchAreaName'])->name('store.search.area');


//Terms
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');

//Privacy
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');

//Faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');


Route::get('/vendors', [HomeController::class, 'vendors'])->name('vendors');

Route::get('/{brand}', [HomeController::class, 'vendorOverview'])->name('brand.details');
Route::get('/{brand}/stores', [HomeController::class, 'vendorStores'])->name('vendor.stores');
Route::get('/{brand}/offers', [HomeController::class, 'vendorOffers'])->name('vendor.offers');
Route::get('/map/search/division', [HomeController::class, 'mapDivision'])->name('map.division');
Route::get('/map/search/city', [HomeController::class, 'mapCity'])->name('map.city');
// Route::get('/brand/{id}/overview', [HomeController::class, 'vendorOverview'])->name('brand.details');
// Route::get('/brand/{id}/stores', [HomeController::class, 'vendorStores'])->name('vendor.stores');
// Route::get('/brand/{id}/offers', [HomeController::class, 'vendorOffers'])->name('vendor.offers');

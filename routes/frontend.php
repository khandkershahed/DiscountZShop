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
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.add');

//Email
Route::post('email/subscribe', [NewsletterController::class, 'store'])->name('email.subscribe');

//Catewory
Route::get('/category/{slug}', [HomeController::class, 'categoryDetails'])->name('category.details');

//Offer
Route::get('/offers/all', [HomeController::class, 'allOffer'])->name('allOffer');
Route::get('/offer-details/{slug}', [HomeController::class, 'offerDetails'])->name('offer.details');
Route::get('/offers/search', [HomeController::class, 'searchOfferName'])->name('offer.search');

Route::get('/offers/filter', [HomeController::class, 'filterOffers']);

//Homepage Deal Search
Route::get('/deal/search', [HomeController::class, 'searchDeal'])->name('deal.search');


//Brand
Route::get('/brands/all', [HomeController::class, 'allBrand'])->name('allBrand');
Route::get('/brand/{slug}', [HomeController::class, 'brandDetails'])->name('brand.details');

//Coupon
Route::get('/coupon/all', [HomeController::class, 'allCoupon'])->name('allCoupon');
Route::get('/coupon/{slug}', [HomeController::class, 'couponDetails'])->name('coupon.details');

//Store
Route::get('/store/all', [HomeController::class, 'allStore'])->name('allStore');
Route::get('/store/{slug}', [HomeController::class, 'storeDetails'])->name('store.details');

//Terms
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');

//Privacy
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');

//Faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

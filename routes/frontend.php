<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;




Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');

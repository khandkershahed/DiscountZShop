<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('frontend.pages.home.home');
    }
    public function aboutUs()
    {
        return view('frontend.pages.about');
    }
    public function contactUs()
    {
        return view('frontend.pages.contact');
    }

}

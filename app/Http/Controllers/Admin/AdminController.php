<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Store;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch admins where admin_role_type is 'site_testing'
        $admins = Admin::whereIn('admin_role_type', ['site_testing'])->latest()->get();

        // Get the total number of brands, offers, and stores
        $brandCount = Brand::count();
        $offerCount = Offer::count();
        $storeCount = Store::count();


        // Pass all the necessary data to the view
        return view('admin/dashboard', compact('admins', 'brandCount', 'offerCount', 'storeCount'));
    }
}

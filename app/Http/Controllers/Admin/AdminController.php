<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch admins where admin_role_type is 'site_testing'
        $admins        = Admin::whereIn('admin_role_type', ['site_testing'])->latest()->get();
        $brandCount    = Brand::count();
        $offerCount    = Offer::count();
        $storeCount    = Store::count();
        $expiredoffers = Offer::where('expiry_date', '<=', Carbon::now()->format('Y-m-d'))->count();


        // Pass all the necessary data to the view
        return view('admin/dashboard', compact('admins', 'brandCount', 'offerCount', 'storeCount', 'expiredoffers'));
    }
}

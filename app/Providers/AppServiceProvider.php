<?php

namespace App\Providers;

use Exception;
use App\Models\Area;
use App\Models\City;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Country;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Division;
use App\Models\HomePage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('setting', null);
        View::share('categories', null);
        View::share('brands', null);
        View::share('stores', null);
        View::share('countries', null);
        View::share('divisions', null);
        View::share('citys', null);
        View::share('areas', null);
        View::share('admins', null);
        View::share('homepages', null);

        try {
            
            if (Schema::hasTable('homepages')) {
                View::share('homepage', HomePage::first());
            }

            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('categories')) {
                View::share('categories', Category::with('children')->whereNull('parent_id')->get());
            }

            if (Schema::hasTable('brands')) {
                View::share('brands', Brand::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('countries')) {
                View::share('countries', Country::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('divisions')) {
                View::share('divisions', Division::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('stores')) {
                View::share('stores', Store::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('cities')) {
                View::share('citys', City::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('areas')) {
                View::share('areas', Area::orderBy('name','asc')->get());
            }

            if (Schema::hasTable('admins')) {
                View::share('admins', Admin::orderBy('name','asc')->get());
            }

        } catch (Exception $e) {
            // Log the exception if needed
        }
        Paginator::useBootstrap();
    }
}

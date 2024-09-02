<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsRequest;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.about-us.index', ['aboutUs' => AboutUs::first()]);
    }

    public function updateOrcreateAboutUs(AboutUsRequest $request)
    {
        
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\SettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.setting.index', ['setting' => Setting::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateOrcreateSetting(SettingRequest $request)
    {
        $currentSetting = Setting::first();

        $dataToUpdateOrCreate = [
            'site_name'        => $request->site_name,
            'site_motto'       => $request->site_motto,
            'contact_email'    => $request->contact_email,
            'support_email'    => $request->support_email,
            'info_email'       => $request->info_email,
            'sales_email'      => $request->sales_email,
            'phone_one'        => $request->phone_one,
            'phone_two'        => $request->phone_two,
            'whatsapp_number'  => $request->whatsapp_number,
            'default_language' => $request->default_language,
            'maintenance_mode' => $request->maintenance_mode,
            'address'          => $request->address,
            'seo_keywords'     => $request->seo_keywords,
            'seo_description'  => $request->seo_description,
            'company_name'     => $request->company_name,
            'system_timezone'  => $request->system_timezone,
            'facebook_url'     => $request->facebook_url,
            'twitter_url'      => $request->twitter_url,
            'instagram_url'    => $request->instagram_url,
            'linkedin_url'     => $request->linkedin_url,
            'youtube_url'      => $request->youtube_url,
            'github_url'       => $request->github_url,
            'portfolio_url'    => $request->portfolio_url,
            'fiver_url'        => $request->fiver_url,
            'upwork_url'       => $request->upwork_url,
            'service_days'     => $request->service_days,
            'service_time'     => $request->service_time,
        ];

        if ($request->hasFile('site_logo')) {
            $siteLogoPath = handaleFileUpload($request->file('site_logo'), 'settings');

            if ($siteLogoPath) {
                // check if there's an existing site logo and delete it
                if ($currentSetting && $currentSetting->site_logo) {
                    $existingSiteLogo = storage_path('app/public/' . $currentSetting->site_logo);
                    if (File::exists($existingSiteLogo)) {
                        File::delete($existingSiteLogo);
                    }
                }
                $dataToUpdateOrCreate['site_logo'] = $siteLogoPath;
            }
        }
        if ($request->hasFile('site_favicon')) {
            $siteLogoPath = handaleFileUpload($request->file('site_favicon'), 'settings');

            if ($siteLogoPath) {
                // check if there's an existing site logo and delete it
                if ($currentSetting && $currentSetting->site_favicon) {
                    $existingSiteLogo = storage_path('app/public/' . $currentSetting->site_favicon);
                    if (File::exists($existingSiteLogo)) {
                        File::delete($existingSiteLogo);
                    }
                }
                $dataToUpdateOrCreate['site_favicon'] = $siteLogoPath;
            }
        }


        $setting = Setting::updateOrCreate([], $dataToUpdateOrCreate);

        $toastrMessage = $setting->wasRecentlyCreated ? 'Setting created successfully' : 'Setting updated successfully';

        return redirect()->route('admin.settings.index')->with('toast_success', $toastrMessage);
    }
}

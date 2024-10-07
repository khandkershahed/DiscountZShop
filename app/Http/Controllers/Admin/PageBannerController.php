<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['banners'] = PageBanner::latest('id')->get();
        return view('admin.pages.pageBanner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.pageBanner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page_name' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'badge' => 'nullable|string|max:191',
            'button_name' => 'nullable|string|max:200',
            'button_link' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ], [
            'page_name.required' => 'The Page Name is required.',
            'image.required' => 'The Image field is required.',
            'image.file' => 'The Image must be a file.',
            'image.mimes' => 'The Image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The Image may not be greater than 2MB.',
            'status.required' => 'The Status field is required.',
            'status.in' => 'The status must be one of: active, inactive.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'pagebanner/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Offer model instance
            PageBanner::create([

                'page_name' => $request->page_name,
                'badge' => $request->badge,
                'button_name' => $request->button_name,
                'button_link' => $request->button_link,
                'status' => $request->status,

                'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            ]);

            DB::commit();
            return redirect()->route('admin.page-banner.index')->with('success', 'Data created successfully');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Offer: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = PageBanner::findOrFail($id);
        return view('admin.pages.pageBanner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pageBanner = PageBanner::find($id);

        DB::beginTransaction();

        try {
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'pagebanner/' . $key;
                    $oldFile = $brand->$key ?? null;

                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Update the brand with the new or existing file paths
            $pageBanner->update([

                'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $pageBanner->image,

                'page_name' => $request->page_name,
                'badge' => $request->badge,
                'button_name' => $request->button_name,
                'button_link' => $request->button_link,
                'status' => $request->status,

            ]);

            DB::commit();

            return redirect()->route('admin.page-banner.index')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the brand: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer = PageBanner::findOrFail($id);
        $offer->delete();
    
    }
}

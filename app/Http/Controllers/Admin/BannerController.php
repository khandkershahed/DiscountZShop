<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{

    public function index()
    {
        return view('admin.pages.banner.index', ['banners' => Banner::latest()->get()]);
    }

    //create
    public function create()
    {
        return view('admin.pages.banner.create');
    }

    //store
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'image_one' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'image_two' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'image_three' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
            
            'image_one_url' => 'required|url',
            'image_two_url' => 'required|url',
            'image_three_url' => 'required|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $files = [
                'image_one' => $request->file('image_one'),
                'image_two' => $request->file('image_two'),
                'image_three' => $request->file('image_three'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'banner/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Offer model instance
            Banner::create([

                'status' => $request->status,

                'image_one_url' => $request->image_one_url,
                'image_two_url' => $request->image_two_url,
                'image_three_url' => $request->image_three_url,

                'image_one' => $uploadedFiles['image_one']['status'] == 1 ? $uploadedFiles['image_one']['file_path'] : null,
                'image_two' => $uploadedFiles['image_two']['status'] == 1 ? $uploadedFiles['image_two']['file_path'] : null,
                'image_three' => $uploadedFiles['image_three']['status'] == 1 ? $uploadedFiles['image_three']['file_path'] : null,
            ]);

            DB::commit();
            return redirect()->route('admin.banner.index')->with('success', 'Banner created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Offer: ' . $e->getMessage());
        }
    }

    //Edit
    public function edit(string $id)
    {
        $data = [
            'banner' => Banner::findOrFail($id),
        ];
        return view('admin.pages.banner.edit', $data);
    }

    //Update
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);

        DB::beginTransaction();

        try {
            $files = [

                'image_one' => $request->file('image_one'),
                'image_two' => $request->file('image_two'),
                'image_three' => $request->file('image_three'),

            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'banner/' . $key;
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
            $banner->update([

                'image_one' => $uploadedFiles['image_one']['status'] == 1 ? $uploadedFiles['image_one']['file_path'] : $banner->image_one,

                'image_two' => $uploadedFiles['image_two']['status'] == 1 ? $uploadedFiles['image_two']['file_path'] : $banner->image_two,

                'image_three' => $uploadedFiles['image_three']['status'] == 1 ? $uploadedFiles['image_three']['file_path'] : $banner->image_three,

                'status' => $request->status,

                'image_one_url' => $request->image_one_url,
                'image_two_url' => $request->image_two_url,
                'image_three_url' => $request->image_three_url,

            ]);

            DB::commit();

            return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the brand: ' . $e->getMessage());
        }
    }

    //destroy
    public function destroy(string $id)
    {

        $offer = Banner::findOrFail($id);
        // Delete the offer record
        $offer->delete();
    }

    public function updateStatusBanner(Request $request, $id)
    {
        $offer = Banner::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

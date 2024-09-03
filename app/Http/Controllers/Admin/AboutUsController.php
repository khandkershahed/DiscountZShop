<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::latest()->get();
        return view('admin.pages.about-us.index', compact('aboutus'));
    }

    //Edit About
    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.pages.about-us.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = AboutUs::find($id);

        DB::beginTransaction();

        try {
            $files = [

                'banner_image' => $request->file('banner_image'),

                'row_one_column_one_icon' => $request->file('row_one_column_one_icon'),
                'row_one_column_two_icon' => $request->file('row_one_column_two_icon'),
                'row_one_column_three_icon' => $request->file('row_one_column_three_icon'),

                'row_five_bg_image' => $request->file('row_five_bg_image'),

                'row_five_column_one_icon' => $request->file('row_five_column_one_icon'),
                'row_five_column_two_icon' => $request->file('row_five_column_two_icon'),
                'row_five_column_three_icon' => $request->file('row_five_column_three_icon'),
                'row_five_column_four_icon' => $request->file('row_five_column_four_icon'),

            ];

            $uploadedFiles = [];

            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'about-us/' . $key;
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
            $about->update([

                'banner_image' => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $about->banner_image,

                'row_one_column_one_icon' => $uploadedFiles['row_one_column_one_icon']['status'] == 1 ? $uploadedFiles['row_one_column_one_icon']['file_path'] : $about->row_one_column_one_icon,

                'row_one_column_two_icon' => $uploadedFiles['row_one_column_two_icon']['status'] == 1 ? $uploadedFiles['row_one_column_two_icon']['file_path'] : $about->row_one_column_two_icon,

                'row_one_column_three_icon' => $uploadedFiles['row_one_column_three_icon']['status'] == 1 ? $uploadedFiles['row_one_column_three_icon']['file_path'] : $about->row_one_column_three_icon,

                'row_five_bg_image' => $uploadedFiles['row_five_bg_image']['status'] == 1 ? $uploadedFiles['row_five_bg_image']['file_path'] : $about->row_five_bg_image,

                'row_five_column_one_icon' => $uploadedFiles['row_five_column_one_icon']['status'] == 1 ? $uploadedFiles['row_five_column_one_icon']['file_path'] : $about->row_five_column_one_icon,

                'row_five_column_two_icon' => $uploadedFiles['row_five_column_two_icon']['status'] == 1 ? $uploadedFiles['row_five_column_two_icon']['file_path'] : $about->row_five_column_two_icon,

                'row_five_column_three_icon' => $uploadedFiles['row_five_column_three_icon']['status'] == 1 ? $uploadedFiles['row_five_column_three_icon']['file_path'] : $about->row_five_column_three_icon,

                'row_five_column_four_icon' => $uploadedFiles['row_five_column_four_icon']['status'] == 1 ? $uploadedFiles['row_five_column_four_icon']['file_path'] : $about->row_five_column_four_icon,

                'row_one_column_one_title' => $request->row_one_column_one_title,
                'row_one_column_one_description' => $request->row_one_column_one_description,
                'row_one_column_one_url' => $request->row_one_column_one_url,

                'row_one_column_two_title' => $request->row_one_column_two_title,
                'row_one_column_two_description' => $request->row_one_column_two_description,
                'row_one_column_two_url' => $request->row_one_column_two_url,

                'row_one_column_three_title' => $request->row_one_column_three_title,
                'row_one_column_three_description' => $request->row_one_column_three_description,
                'row_one_column_three_url' => $request->row_one_column_three_url,

                'row_two_badge' => $request->row_two_badge,
                'row_two_title' => $request->row_two_title,
                'row_two_description' => $request->row_two_description,
                'row_two_button_name' => $request->row_two_button_name,
                'row_two_button_url' => $request->row_two_button_url,

                'row_three_badge' => $request->row_three_badge,
                'row_three_title' => $request->row_three_title,
                'row_three_description' => $request->row_three_description,
                'row_three_button_name' => $request->row_three_button_name,
                'row_three_button_url' => $request->row_three_button_url,
                
                'row_four_badge' => $request->row_four_badge,
                'row_four_title' => $request->row_four_title,
                'row_four_description' => $request->row_four_description,
                'row_four_button_name' => $request->row_four_button_name,
                'row_four_button_url' => $request->row_four_button_url,

                'row_five_column_one_title' => $request->row_five_column_one_title,
                'row_five_column_one_description' => $request->row_five_column_one_description,
                'row_five_column_one_url' => $request->row_five_column_one_url,

                'row_five_column_two_title' => $request->row_five_column_two_title,
                'row_five_column_two_description' => $request->row_five_column_two_description,
                'row_five_column_two_url' => $request->row_five_column_two_url,

                'row_five_column_three_title' => $request->row_five_column_three_title,
                'row_five_column_three_description' => $request->row_five_column_three_description,
                'row_five_column_three_url' => $request->row_five_column_three_url,

                'row_five_column_four_title' => $request->row_five_column_four_title,
                'row_five_column_four_description' => $request->row_five_column_four_description,
                'row_five_column_four_url' => $request->row_five_column_four_url,
                

            ]);

            DB::commit();

            return redirect()->route('admin.about-us.index')->with('success', 'About updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the brand: ' . $e->getMessage());
        }
    }
}

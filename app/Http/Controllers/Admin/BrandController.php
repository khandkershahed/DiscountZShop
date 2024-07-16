<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view brand|create brand|show brand|edit brand|delete brand')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl   = route('admin.brands.edit', $row->id);
                    $deleteUrl = route('admin.brands.destroy', $row->id);

                    $html = <<<HTML
                    <td class="text-end">
                        <a href="{$editUrl}" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                        <a href="{$deleteUrl}" class="btn btn-icon btn-active-light-danger w-30px h-30px delete">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </a>
                    </td>
                    HTML;

                    return new HtmlString($html);
                })->rawColumns(['action'])->make(true);
        }

        return view('admin.pages.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        // Start the database transaction
        DB::beginTransaction();

        try {
            // Initialize variables to store file paths
            $logoPath = null;
            $imagePath = null;
            $bannerImagePath = null;

            // Handle logo file upload
            if ($request->hasFile('logo')) {
                $logoPath = handaleFileUpload($request->file('logo'), 'brands');
            }

            // Handle image file upload
            if ($request->hasFile('image')) {
                $imagePath = handaleFileUpload($request->file('image'), 'brands');
            }

            // Handle banner image file upload
            if ($request->hasFile('banner_image')) {
                $bannerImagePath = handaleFileUpload($request->file('banner_image'), 'brands');
            }

            // Create the Brand model instance
            $brand = Brand::create([
                'name' => $request->name,
                'logo' => $logoPath,
                'image' => $imagePath,
                'banner_image' => $bannerImagePath,
                'description' => $request->description,
                'url' => $request->url,
                'status' => $request->status,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();

            // Return back with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Brand: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin.pages.brands.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.pages.brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        DB::beginTransaction();

        try {
            $logoPath = handleFileUpdate($request, 'logo', $brand, 'brands');
            $imagePath = handleFileUpdate($request, 'image', $brand, 'brands');
            $bannerImagePath = handleFileUpdate($request, 'banner_image', $brand, 'brands');

            // Update the brand with the new or existing file paths
            $brand->update([
                'name'         => $request->name,
                'logo'         => $logoPath,
                'image'        => $imagePath,
                'banner_image' => $bannerImagePath,
                'description'  => $request->description,
                'url'          => $request->url,
                'status'       => $request->status,
            ]);

            DB::commit();

            return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the brand: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //Delete the image if it exists

        $brand->delete();
    }

    public function toggleStatus(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = $brand->status == 'active' ? 'inactive' : 'active';
        $brand->save();
        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * The constructor function sets middleware permissions for different category-related actions in a PHP
     * class.
     */
    // public function __construct()
    // {
    //     $this->middleware('permission:view categories|show categories|edit categories|delete categories|create categories')->only(['index', 'create', 'show', 'edit', 'destroy']);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.categories.index', [
            'categories' => Category::with('children')->whereNull('parent_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->buildCategories(Category::active()->get());
        $categoriesOptions = $this->buildCategoriesOptions($categories);

        return view('admin.pages.categories.create', [
            'categoriesOptions' => $categoriesOptions,
        ]);
    }

    private function buildCategories($categories, $parentId = null)
    {
        $result = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildCategories($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                }

                $result[] = $category;
            }
        }

        return $result;
    }

    private function buildCategoriesOptions($selectedId = null, $excludeId = null, $parentId = null, $prefix = '')
    {
        $categories = Category::active()->where('parent_id', $parentId)->where('id', '!=', $excludeId)->get();
        $options = '';

        foreach ($categories as $category) {
            $selected = $category->id == $selectedId ? 'selected' : '';
            $options .= '<option value="' . $category->id . '" ' . $selected . '>' . $prefix . $category->name . '</option>';
            $options .= $this->buildCategoriesOptions($selectedId, $excludeId, $category->id, $prefix . '--');
        }

        return $options;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
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
                $logoPath = handaleFileUpload($request->file('logo'), 'category');
            }

            // Handle image file upload
            if ($request->hasFile('image')) {
                $imagePath = handaleFileUpload($request->file('image'), 'category');
            }

            // Handle banner image file upload
            if ($request->hasFile('banner_image')) {
                $bannerImagePath = handaleFileUpload($request->file('banner_image'), 'category');
            }

            // Create the Brand model instance
            $category = Category::create([
                'name'         => $request->name,
                'parent_id'    => $request->parent_id,
                'logo'         => $logoPath,
                'image'        => $imagePath,
                'banner_image' => $bannerImagePath,
                'description'  => $request->description,
                'status'       => $request->status,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();

            // Return back with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Category: ' . $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.categories.show', [
            'category' => Category::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $categoriesOptions = $this->buildCategoriesOptions($category->parent_id, $category->id);

        return view('admin.pages.categories.edit', [
            'category' => $category,
            'categoriesOptions' => $categoriesOptions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        DB::beginTransaction();

        try {
            $logoPath = handleFileUpdate($request, 'logo', $category, 'category');
            $imagePath = handleFileUpdate($request, 'image', $category, 'category');
            $bannerImagePath = handleFileUpdate($request, 'banner_image', $category, 'category');

            // Update the brand with the new or existing file paths
            $category->update([
                'name'         => $request->name,
                'parent_id'    => $request->parent_id,
                'logo'         => $logoPath,
                'image'        => $imagePath,
                'banner_image' => $bannerImagePath,
                'description'  => $request->description,
                'status'       => $request->status,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Category updated successfully');
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
        Category::findOrFail($id)->delete();
    }
}

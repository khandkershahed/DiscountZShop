<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Models\City;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Country;
use App\Models\Category;
use App\Models\Division;
use App\Mail\StoreCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'stores' => Store::latest('id')->get(),
        ];
        return view('admin.pages.store.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => Category::active()->get(),
            'countries'  => Country::orderBy('name', 'asc')->get(),
            'divisions'  => Division::orderBy('name', 'asc')->get(),
            'citys'      => City::orderBy('name', 'asc')->get(),
            'areas'      => Area::orderBy('name', 'asc')->get(),
        ];
        return view('admin.pages.store.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id'        => 'nullable|array',
            'country_id.*'      => 'nullable|exists:countries,id',
            'division_id'       => 'nullable|array',
            'division_id.*'     => 'nullable|exists:divisions,id',
            'city_id'           => 'nullable|array',
            'city_id.*'         => 'nullable|exists:cities,id',
            'area_id'           => 'nullable|array',
            'area_id.*'         => 'nullable|exists:areas,id',
            'category_id'       => 'nullable|exists:categories,id',
            'name'              => 'required|string|max:200|unique:stores,name',
            'badge'             => 'nullable|string',
            'logo'              => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'image'             => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'banner_image'      => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'about'             => 'nullable|string',
            'offer_description' => 'nullable|string',
            'location'          => 'nullable|string',
            'description'       => 'nullable|string',
            'url'               => 'nullable|url|max:255',
            'category'          => 'nullable|string',
            'status'            => 'required|in:active,inactive',
        ], [
            'country_id.*.exists'     => 'One of the selected countries is invalid.',
            'division_id.*.exists'    => 'One of the selected divisions is invalid.',
            'city_id.*.exists'        => 'One of the selected cities is invalid.',
            'area_id.*.exists'        => 'One of the selected areas is invalid.',
            'category_id.exists'      => 'The selected category is invalid.',
            'name.required'           => 'The name field is required.',
            'name.unique'             => 'The name has already been taken.',
            'name.max'                => 'The name may not be greater than 30 characters.',
            'slug.required'           => 'The slug field is required.',
            'slug.unique'             => 'The slug has already been taken.',
            'slug.max'                => 'The slug may not be greater than 40 characters.',
            'badge.string'            => 'The badge must be a string.',
            'logo.file'               => 'The logo must be a file.',
            'image.file'              => 'The image must be a file.',
            'banner_image.file'       => 'The banner image must be a file.',
            'url.url'                 => 'The URL format is invalid.',
            'url.max'                 => 'The URL may not be greater than 255 characters.',
            'status.required'         => 'The status field is required.',
            'status.in'               => 'The selected status is invalid. It must be either active or inactive.',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        DB::beginTransaction();

        try {
            $files = [
                'logo' => $request->file('logo'),
                'image' => $request->file('image'),
                'banner_image' => $request->file('banner_image'),
                'middle_banner_left' => $request->file('middle_banner_left'),
                'middle_banner_right' => $request->file('middle_banner_right'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'store/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // Create the Brand model instance
            $store = Store::create([
                'name'                => $request->name,
                'headquarter'         => $request->headquarter,
                'logo'                => $uploadedFiles['logo']['status']                == 1 ? $uploadedFiles['logo']['file_path']               : null,
                'image'               => $uploadedFiles['image']['status']               == 1 ? $uploadedFiles['image']['file_path']              : null,
                'banner_image'        => $uploadedFiles['banner_image']['status']        == 1 ? $uploadedFiles['banner_image']['file_path']       : null,

                'middle_banner_right' => $uploadedFiles['middle_banner_right']['status'] == 1 ? $uploadedFiles['middle_banner_right']['file_path'] : null,

                'middle_banner_left'  => $uploadedFiles['middle_banner_left']['status']  == 1 ? $uploadedFiles['middle_banner_left']['file_path'] : null,

                'added_by' => Auth::guard('admin')->user()->id,

                'country_id'          => json_encode($request->country_id),
                'division_id'         => json_encode($request->division_id),
                'city_id'             => json_encode($request->city_id),
                'area_id'             => json_encode($request->area_id),
                'category_id'         => $request->category_id,
                'category_type'         => $request->category_type,
                'about'               => $request->about,
                'offer_description'   => $request->offer_description,
                'location'            => $request->location,
                'description'         => $request->description,
                'url'                 => $request->url,
                'map_url'             => $request->map_url,
                'category'            => $request->category,
                'status'              => $request->status,
                'badge'              => $request->badge,
            ]);

            // Commit the database transaction
            DB::commit();

            //Mail Send
            $admins = Admin::where('mail_status', 'mail')->get();
            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new StoreCreated($store));
            }

            return redirect()->route('admin.store.index')->with('success', 'Store created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();

            // Return back with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Store: ' . $e->getMessage());
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
        $data = [
            'store'      => Store::findOrFail($id),
            'categories' => Category::active()->get(),
            'countries'  => Country::orderBy('name', 'asc')->get(),
            'divisions'  => Division::orderBy('name', 'asc')->get(),
            'citys'      => City::orderBy('name', 'asc')->get(),
            'areas'      => Area::orderBy('name', 'asc')->get(),
        ];
        return view('admin.pages.store.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $store = Store::findOrFail($id);

    //     DB::beginTransaction();

    //     try {
    //         $files = [
    //             'logo' => $request->file('logo'),
    //             'image' => $request->file('image'),
    //             'banner_image' => $request->file('banner_image'),

    //             'middle_banner_left' => $request->file('middle_banner_left'),
    //             'middle_banner_right' => $request->file('middle_banner_right'),
    //         ];
    //         $uploadedFiles = [];
    //         foreach ($files as $key => $file) {
    //             if (!empty($file)) {
    //                 $filePath = 'store/' . $key;
    //                 $oldFile = $store->$key ?? null;

    //                 if ($oldFile) {
    //                     Storage::delete("public/" . $oldFile);
    //                 }
    //                 $uploadedFiles[$key] = customUpload($file, $filePath);
    //                 if ($uploadedFiles[$key]['status'] === 0) {
    //                     return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
    //                 }
    //             } else {
    //                 $uploadedFiles[$key] = ['status' => 0];
    //             }
    //         }

    //         // Update the store with the new or existing file paths
    //         $store->update([
    //             'name'                => $request->name,
    //             'headquarter'         => $request->headquarter,

    //             'logo'                => $uploadedFiles['logo']['status']                == 1 ? $uploadedFiles['logo']['file_path']               : $store->logo,
    //             'image'               => $uploadedFiles['image']['status']               == 1 ? $uploadedFiles['image']['file_path']              : $store->image,

    //             'banner_image'        => $uploadedFiles['banner_image']['status']        == 1 ? $uploadedFiles['banner_image']['file_path']       : $store->banner_image,

    //             'middle_banner_left'  => $uploadedFiles['middle_banner_left']['status']  == 1 ? $uploadedFiles['middle_banner_left']['file_path'] : $store->middle_banner_left,

    //             'middle_banner_right' => $uploadedFiles['middle_banner_right']['status'] == 1 ? $uploadedFiles['middle_banner_right']['file_path'] : $store->middle_banner_right,

    //             'added_by' => Auth::guard('admin')->user()->id,

    //             'country_id'          => json_encode($request->country_id),
    //             'division_id'         => json_encode($request->division_id),
    //             'city_id'             => json_encode($request->city_id),
    //             'area_id'             => json_encode($request->area_id),

    //             'category_id'         => $request->category_id,
    //             'category_type'         => $request->category_type,
    //             'about'               => $request->about,
    //             'offer_description'   => $request->offer_description,
    //             'location'            => $request->location,
    //             'description'         => $request->description,
    //             'url'                 => $request->url,
    //             'map_url'             => $request->map_url,
    //             'category'            => $request->category,
    //             'status'              => $request->status,
    //             'badge'              => $request->badge,
    //         ]);

    //         DB::commit();

    //         return redirect()->route('admin.store.index')->with('success', 'Store updated successfully');
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         return redirect()->back()->with('error', 'An error occurred while updating the Store: ' . $e->getMessage());
    //     }
    // }
    public function update(Request $request, string $id)
    {
        $store = Store::findOrFail($id);

        DB::beginTransaction();

        try {


            // Update the store with the new or existing file paths
            $store->update([
                    'country_id'          => $request->country_id,
                    'division_id'         => $request->division_id,
                    'city_id'             => $request->city_id,
                    'area_id'             => $request->area_id,
                    'title'               => $request->title,
                    'address_line_one'    => $request->address_line_one,
                    'address_line_two'    => $request->address_line_two,
                    'url'                 => $request->url,
                    // 'brand_id'            => $request->id,
                    'category_id'         => $request->category_id,
                    'location'            => $request->location,
                    'description'         => $request->description,
                    'status'              => $request->status,
            ]);

            DB::commit();
            Session::flash('success', 'Store updated successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the Store: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
        $files = [
            'logo' => $store->logo,
            'image' => $store->image,
            'banner_image' => $store->banner_image,
            'middle_banner_left' => $store->middle_banner_left,
            'middle_banner_right' => $store->middle_banner_right,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $store->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $store->delete();
    }

    public function toggleStatus(string $id)
    {
        $store = Store::findOrFail($id);
        $store->status = $store->status == 'active' ? 'inactive' : 'active';
        $store->save();
        return response()->json(['success' => true]);
    }
}

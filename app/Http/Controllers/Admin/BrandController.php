<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Models\City;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Store;
use App\Models\Country;
use App\Models\Category;
use App\Models\Division;
use App\Mail\BrandCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\BrandRequest;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = [
            'brands' => Brand::latest('id')->get(),
        ];

        return view('admin.pages.brands.index', $data);
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
        return view('admin.pages.brands.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        foreach ($request->stores as $key => $store) {
            dd($store);
        }

        dd($request->all());
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
            'name'              => 'required|string|max:200|unique:brands,name',
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

        // Start the database transaction
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
                    $filePath = 'brands/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // Create the Brand model instance
            $brand = Brand::create([
                'name'                      => $request->name,
                'headquarter'               => $request->headquarter,
                'logo'                      => $uploadedFiles['logo']['status']                == 1 ? $uploadedFiles['logo']['file_path']               : null,
                'image'                     => $uploadedFiles['image']['status']               == 1 ? $uploadedFiles['image']['file_path']              : null,
                'banner_image'              => $uploadedFiles['banner_image']['status']        == 1 ? $uploadedFiles['banner_image']['file_path']       : null,
                'middle_banner_right'       => $uploadedFiles['middle_banner_right']['status'] == 1 ? $uploadedFiles['middle_banner_right']['file_path'] : null,
                'middle_banner_left'        => $uploadedFiles['middle_banner_left']['status']  == 1 ? $uploadedFiles['middle_banner_left']['file_path'] : null,
                'country_id'                => json_encode($request->country_id),
                'division_id'               => json_encode($request->division_id),
                'city_id'                   => json_encode($request->city_id),
                'area_id'                   => json_encode($request->area_id),
                'added_by'                  => Auth::guard('admin')->user()->id,
                'category_id'               => $request->category_id,
                'category_type'             => $request->category_type,
                'about_title'               => $request->about_title,
                'about'                     => $request->about,
                'offer_description_title'   => $request->offer_description_title,
                'offer_description'         => $request->offer_description,
                'location'                  => $request->location,
                'description_title'         => $request->description_title,
                'description'               => $request->description,
                'url'                       => $request->url,
                'map_url'                   => $request->map_url,
                'category'                  => $request->category,
                'status'                    => $request->status,
            ]);

            foreach ($request->stores as $key => $store) {
                $store = Store::create([
                    'name'                => $request->name,
                    'headquarter'         => $request->headquarter,
                    'logo'                => $uploadedFiles['logo']['status']                == 1 ? $uploadedFiles['logo']['file_path']               : null,
                    'image'               => $uploadedFiles['image']['status']               == 1 ? $uploadedFiles['image']['file_path']              : null,
                    'banner_image'        => $uploadedFiles['banner_image']['status']        == 1 ? $uploadedFiles['banner_image']['file_path']       : null,

                    'middle_banner_right' => $uploadedFiles['middle_banner_right']['status'] == 1 ? $uploadedFiles['middle_banner_right']['file_path'] : null,

                    'middle_banner_left'  => $uploadedFiles['middle_banner_left']['status']  == 1 ? $uploadedFiles['middle_banner_left']['file_path'] : null,

                    'added_by'            => Auth::guard('admin')->user()->id,

                    'country_id'          => $store['country_id'],
                    'division_id'         => $store['division_id'],
                    'city_id'             => $store['city_id'],
                    'area_id'             => $store['area_id'],
                    'title'               => $store['title'],
                    'address_line_one'    => $store['address_line_one'],
                    'address_line_two'    => $store['address_line_two'],
                    'url'                 => $store['url'],
                    'category_id'         => $request->category_id,
                    'category_type'       => $request->category_type,
                    'about'               => $request->about,
                    'offer_description'   => $request->offer_description,
                    'location'            => $request->location,
                    'description'         => $request->description,
                    'url'                 => $request->url,
                    'map_url'             => $request->map_url,
                    'category'            => $request->category,
                    'status'              => $request->status,
                    'badge'               => $request->badge,
                ]);
            }

            foreach ($request->offers as $key => $offer) {
                $offer = Offer::create([
                    'country_id'        => json_encode($store['country_id']),
                    'division_id'       => json_encode($store['division_id']),
                    'city_id'           => json_encode($store['city_id']),
                    'area_id'           => json_encode($store['area_id']),
                    'notify_to'         => json_encode($store['notify_to']),
                    'tags'              => $request->tags,
                    'added_by'          => Auth::guard('admin')->user()->id,
                    'name'              => $request->name,
                    'badge'             => $request->badge,
                    'category_id'       => $request->category_id,
                    'brand_id'          => $request->brand_id,
                    'store_id'          => $request->store_id,
                    'price'             => $request->price,
                    'offer_price'       => $request->offer_price,
                    'start_date'        => $request->start_date,
                    'description'       => $request->description,
                    'short_description' => $request->short_description,
                    'locations'         => $request->locations,
                    'url'               => $request->url,
                    'source_url'        => $request->source_url,
                    'coupon_code'       => $request->coupon_code,
                    'status'            => $request->status,
                    'notification_date' => $request->notification_date,
                    'expiry_date'       => $request->expiry_date,
                    'map_url'           => $request->map_url,
                    'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : null,
                    'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : null,
                    'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
                    'created_at'        => now(),
                ]);
            }
            // Commit the database transaction
            DB::commit();

            // Mail Send
            $admins = Admin::where('mail_status', 'mail')->get();

            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new BrandCreated($brand));
            }
            // Mail Send

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
        $data = [
            'brand'      => $brand,
            'categories' => Category::active()->get(),
            'countries'  => Country::orderBy('name', 'asc')->get(),
            'divisions'  => Division::orderBy('name', 'asc')->get(),
            'cities'     => City::orderBy('name', 'asc')->get(),
            'areas'      => Area::orderBy('name', 'asc')->get(),
        ];
        return view('admin.pages.brands.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
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
                    $filePath = 'brands/' . $key;
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
            $brand->update([
                'name'                      => $request->name,
                'headquarter'               => $request->headquarter,

                'logo'                      => $uploadedFiles['logo']['status']                == 1 ? $uploadedFiles['logo']['file_path']               : $brand->logo,
                'image'                     => $uploadedFiles['image']['status']               == 1 ? $uploadedFiles['image']['file_path']              : $brand->image,

                'banner_image'              => $uploadedFiles['banner_image']['status']        == 1 ? $uploadedFiles['banner_image']['file_path']       : $brand->banner_image,

                'middle_banner_left'        => $uploadedFiles['middle_banner_left']['status']  == 1 ? $uploadedFiles['middle_banner_left']['file_path'] : $brand->middle_banner_left,

                'middle_banner_right'       => $uploadedFiles['middle_banner_right']['status'] == 1 ? $uploadedFiles['middle_banner_right']['file_path'] : $brand->middle_banner_right,

                'added_by'                  => Auth::guard('admin')->user()->id,

                'country_id'                => json_encode($request->country_id),
                'division_id'               => json_encode($request->division_id),
                'city_id'                   => json_encode($request->city_id),
                'area_id'                   => json_encode($request->area_id),

                'category_id'               => $request->category_id,
                'category_type'             => $request->category_type,
                'about_title'               => $request->about_title,
                'about'                     => $request->about,
                'offer_description_title'   => $request->offer_description_title,
                'offer_description'         => $request->offer_description,
                'location'                  => $request->location,
                'description_title'         => $request->description_title,
                'description'               => $request->description,
                'url'                       => $request->url,
                'map_url'                   => $request->map_url,
                'category'                  => $request->category,
                'status'                    => $request->status,
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
        $files = [
            'logo' => $brand->logo,
            'image' => $brand->image,
            'banner_image' => $brand->banner_image,
            'middle_banner_left' => $brand->middle_banner_left,
            'middle_banner_right' => $brand->middle_banner_right,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $brand->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $brand->delete();
    }

    public function toggleStatus(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = $brand->status == 'active' ? 'inactive' : 'active';
        $brand->save();
        return response()->json(['success' => true]);
    }

    public function updateStatusBrand(Request $request, $id)
    {
        $offer = Brand::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

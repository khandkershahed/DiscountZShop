<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'coupons' => Coupon::orderBy('name', 'ASC')->get(),
        ];
        return view('admin.pages.coupon.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [

            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'store_id' => 'nullable|exists:stores,id',

            'country_id' => 'array',
            'country_id.*' => 'nullable|exists:countries,id',

            'division_id' => 'array',
            'division_id.*' => 'nullable|exists:divisions,id',

            'city_id' => 'array',
            'city_id.*' => 'nullable|exists:cities,id',

            'area_id' => 'array',
            'area_id.*' => 'nullable|exists:areas,id',

            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
            'source_url' => 'nullable|url',
            'status' => 'required|in:active,inactive,expired',

            'logo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',

            'description' => 'nullable|string',
            'short_description' => 'nullable|string',
            'map_url' => 'nullable|string',

            'price' => 'required|numeric',
            'offer_price' => 'required|numeric',

            'start_date' => 'required',
            'notification_date' => 'required',
            'expiry_date' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $files = [
                'logo' => $request->file('logo'),
                'image' => $request->file('image'),
                'banner_image' => $request->file('banner_image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'coupon/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Offer model instance
            Coupon::create([

                'country_id' => json_encode($request->country_id),
                'division_id' => json_encode($request->division_id),
                'city_id' => json_encode($request->city_id),
                'area_id' => json_encode($request->area_id),
                'notify_to' => json_encode($request->notify_to),

                'tags' => $request->tags,

                'added_by' => Auth::guard('admin')->user()->id,
                'name' => $request->name,
                'badge' => $request->badge,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'store_id' => $request->store_id,
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'start_date' => $request->start_date,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'locations' => $request->locations,
                'url' => $request->url,
                'source_url' => $request->source_url,
                'coupon_code' => $request->coupon_code,
                'status' => $request->status,
                'notification_date' => $request->notification_date,
                'expiry_date' => $request->expiry_date,
                'map_url' => $request->map_url,

                'logo' => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : null,
                'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'banner_image' => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
            ]);

            DB::commit();
            return redirect()->route('admin.coupon.index')->with('success', 'Coupon created successfully');

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
        $data = [
            'coupon' => Coupon::findOrFail($id),
        ];
        return view('admin.pages.coupon.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coupon = Coupon::find($id);

        DB::beginTransaction();

        try {
            $files = [
                'logo' => $request->file('logo'),
                'image' => $request->file('image'),
                'banner_image' => $request->file('banner_image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'coupon/' . $key;
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
            $coupon->update([

                'logo' => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : $coupon->logo,
                'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $coupon->image,
                'banner_image' => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $coupon->banner_image,

                'country_id' => json_encode($request->country_id),
                'division_id' => json_encode($request->division_id),
                'city_id' => json_encode($request->city_id),
                'area_id' => json_encode($request->area_id),
                'notify_to' => json_encode($request->notify_to),

                'tags' => $request->tags,

                'added_by' => Auth::guard('admin')->user()->id,

                'name' => $request->name,
                'badge' => $request->badge,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'store_id' => $request->store_id,
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'start_date' => $request->start_date,

                'description' => $request->description,
                'locations' => $request->locations,
                'url' => $request->url,
                'source_url' => $request->source_url,
                'coupon_code' => $request->coupon_code,
                'status' => $request->status,

                'notification_date' => $request->notification_date,
                'expiry_date' => $request->expiry_date,
                'map_url' => $request->map_url,

            ]);

            DB::commit();

            return redirect()->route('admin.coupon.index')->with('success', 'Coupon updated successfully');
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

        $offer = Coupon::findOrFail($id);

        // Delete associated files from storage
        $files = ['logo', 'image', 'banner_image'];

        foreach ($files as $file) {
            $filePath = $offer->$file;
            if ($filePath && Storage::exists("public/$filePath")) {
                Storage::delete("public/$filePath");
            }
        }

        // Delete the offer record
        $offer->delete();

    }

    public function updateStatusCoupon(Request $request, $id)
    {
        $offer = Coupon::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

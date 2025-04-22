<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Offer;
use App\Models\Category;
use App\Models\OfferType;
use Illuminate\Http\Request;
use App\Mail\OfferListCreated;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'offers'        => Offer::latest('id')->get(),
            'allCategories' => Category::latest('id')->get(),
        ];
        return view('admin.pages.offer.index', $data);
    }
    public function expiredOffers()
    {
        $data = [
            'offers'        => Offer::where('expiry_date', '<=', Carbon::now()->format('Y-m-d'))->get(),
            'allCategories' => Category::latest('id')->get(),
        ];
        return view('admin.pages.offer.expired_offers', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'offer_types'   => OfferType::latest()->get(),
            'allCategories' => Category::latest('id')->get(),
        ];
        // $offer_types = OfferType::latest()->get();
        return view('admin.pages.offer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'category_id'       => 'nullable|exists:categories,id',
            'brand_id'          => 'nullable|exists:brands,id',
            'store_id'          => 'nullable|exists:stores,id',
            'country_id'        => 'nullable|array',
            'country_id.*'      => 'nullable|exists:countries,id',
            'division_id'       => 'nullable|array',
            'division_id.*'     => 'nullable|exists:divisions,id',
            'city_id'           => 'nullable|array',
            'city_id.*'         => 'nullable|exists:cities,id',
            'area_id'           => 'nullable|array',
            'area_id.*'         => 'nullable|exists:areas,id',
            'notify_to'         => 'nullable|array',
            'notify_to.*'       => 'nullable|exists:admins,id',
            'name'              => 'required|string|max:255|unique:offers,name',
            'url'               => 'nullable|url',
            'source_url'        => 'nullable|url',
            'status'            => 'required|in:active,inactive,expired',
            'logo'              => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'image'             => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'banner_image'      => 'nullable|file|mimes:webp,jpeg,png,jpg|max:2048',
            'description'       => 'nullable|string',
            'short_description' => 'nullable|string',
            'map_url'           => 'nullable',
            'offer_type_id'     => 'nullable|string',
            'price'             => 'nullable|numeric',
            'offer_price'       => 'nullable|numeric',
            'start_date'        => 'nullable|date',
            'notification_date' => 'nullable|date',
            'expiry_date'       => 'nullable|date',
        ], [
            'category_id.exists'      => 'The selected category is invalid.',
            'brand_id.exists'         => 'The selected brand is invalid.',
            'store_id.exists'         => 'The selected store is invalid.',
            'country_id.*.exists'     => 'One of the selected countries is invalid.',
            'division_id.*.exists'    => 'One of the selected divisions is invalid.',
            'city_id.*.exists'        => 'One of the selected cities is invalid.',
            'area_id.*.exists'        => 'One of the selected areas is invalid.',
            'notify_to.*.exists'      => 'One of the selected admins is invalid.',
            'name.required'           => 'The name field is required.',
            'name.unique'             => 'The name has already been taken.',
            'slug.required'           => 'The slug field is required.',
            'slug.unique'             => 'The slug has already been taken.',
            'url.url'                 => 'The URL format is invalid.',
            'source_url.url'          => 'The source URL format is invalid.',
            'status.required'         => 'The status field is required.',
            'map_url.required'        => 'The map URL field is required.',
            'map_url.string'          => 'The map URL must be a string.',
            'logo.file'               => 'The logo must be a file.',
            'image.file'              => 'The image must be a file.',
            'banner_image.file'       => 'The banner image must be a file.',
            'price.numeric'           => 'The price must be a number.',
            'offer_price.numeric'     => 'The offer price must be a number.',
            'start_date.date'         => 'The start date is not a valid date.',
            'notification_date.date'  => 'The notification date is not a valid date.',
            'expiry_date.date'        => 'The expiry date is not a valid date.',
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
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'offer/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Offer model instance
            $offer = Offer::create([
                'country_id'        => json_encode($request->country_id),
                'division_id'       => json_encode($request->division_id),
                'city_id'           => json_encode($request->city_id),
                'area_id'           => json_encode($request->area_id),
                'notify_to'         => json_encode($request->notify_to),
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
                'offer_type_id'           => $request->offer_type_id,
                'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : null,
                'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : null,
                'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
                'created_at'        => now(),
            ]);

            DB::commit();

            //Mail Send
            $admins = Admin::where('mail_status', 'mail')->get();

            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new OfferListCreated($offer));
            }
            //Mail Send

            return redirect()->route('admin.offer.index')->with('success', 'Offer created successfully');
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
            'offer' => Offer::findOrFail($id),
            'allCategories' => Category::latest('id')->get(),
            'offer_types' => OfferType::latest()->get(),
        ];

        return view('admin.pages.offer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer = Offer::find($id);

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
                    $filePath = 'offer/' . $key;
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
            $offer->update([

                'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : $offer->logo,
                'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : $offer->image,
                'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $offer->banner_image,
                'country_id'        => json_encode($request->country_id),
                'division_id'       => json_encode($request->division_id),
                'city_id'           => json_encode($request->city_id),
                'area_id'           => json_encode($request->area_id),
                'notify_to'         => json_encode($request->notify_to),
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
                'offer_type_id'     => $request->offer_type_id,

            ]);

            DB::commit();

            return redirect()->route('admin.offer.index')->with('success', 'Offer updated successfully');
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

        $offer = Offer::findOrFail($id);

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

        DB::commit();
    }

    public function updateStatus(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'offers' => Offer::orderBy('name', 'ASC')->get(),
        ];
        return view('admin.pages.offer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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

        Offer::insert([

            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'offer_price' => $request->offer_price,
            'start_date' => $request->start_date,
            'notification_date' => $request->notification_date,
            'expiry_date' => $request->expiry_date,
            'map_url' => $request->map_url,

            'logo' => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : null,
            'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            'banner_image' => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,

        ]);

        return redirect()->back();

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
        return view('admin.pages.offer.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

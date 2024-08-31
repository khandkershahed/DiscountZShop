<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

            'country_id' => 'nullable|json',
            'division_id' => 'nullable|json',
            'city_id' => 'nullable|json',
            'area_id' => 'nullable|json',
            'notify_to' => 'nullable|json',

            'category_id' => 'nullable',
            'brand_id' => 'nullable',
            'added_by' => 'nullable',

            'badge' => 'nullable',
            'name' => 'required|string',
            'price' => 'required|string',
            'offer_price' => 'required|string',

            'description' => 'nullable|string',
            'locations' => 'nullable|string',
            'url' => 'nullable|string',
            'source_url' => 'nullable|string',
            'map_url' => 'nullable',
            'tags' => 'nullable',

            'start_date' => 'required|date|date_format:Y-m-d',
            'notification_date' => 'required|date|date_format:Y-m-d',
            'expiry_date' => 'required|date|date_format:Y-m-d',

        ];
    }
}

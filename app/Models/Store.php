<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'title';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     * /**
        * App\Models\Store
        *
        * @property int $id
        * @property int|null $country_id
        * @property int|null $division_id
        * @property int|null $city_id
        * @property int|null $area_id
        * @property int|null $brand_id
        * @property int|null $category_id
        * @property string|null $title
        * @property string|null $slug
        * @property string|null $address_line_one
        * @property string|null $address_line_two
        * @property string|null $logo
        * @property string|null $image
        * @property string|null $banner_image
        * @property string|null $location
        * @property string|null $description
        * @property string|null $url
        * @property string|null $status
        * @property \Illuminate\Support\Carbon|null $created_at
        * @property \Illuminate\Support\Carbon|null $updated_at
     */
    protected $guarded = [];

    public function added()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function categoryName()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // 'country', 'division', 'city', 'area', 'brand', 'category'
}

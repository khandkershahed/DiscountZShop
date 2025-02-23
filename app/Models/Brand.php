<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'name';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function categoryName()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
    
    public function storeName()
    {
        return $this->belongsTo(Store::class);
    }

    public function added()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'brand_id');
    }
}

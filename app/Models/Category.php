<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'name';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // protected $casts = [
    //     'status' => 'boolean',
    // ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id')->where('status','active');
    }

    // public function brands()
    // {
    //     return $this->hasMany(Brand::class, 'category_id')->where('status', 'active');
    // }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function offers()
    {
        $today = Carbon::now()->format('Y-m-d');
        return $this->hasMany(Offer::class)->where(function ($query) use ($today) {
            $query->whereNull('expiry_date')
                ->orWhere('expiry_date', '>=', $today);
        });
    }
    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function added()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferType extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'name';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // public function offers()
    // {
    //     return $this->hasMany(Offer::class)->where('expiry_date', '>=', Carbon::now()->format('Y-m-d')); // Assuming an Offer belongs to an OfferType
    // }
    public function offers()
    {
        return $this->hasMany(Offer::class)
            ->where('status', 'active')
            ->where(function ($q) {
                $q->whereNull('expiry_date')
                    ->orWhere('expiry_date', '>=', now()->format('Y-m-d'));
            });
    }
}

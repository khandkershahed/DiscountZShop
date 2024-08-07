<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function division()
    {
        return $this->hasMany(Division::class, 'country_id');
    }
    public function city()
    {
        return $this->hasMany(City::class, 'country_id');
    }
    public function area()
    {
        return $this->hasMany(Area::class, 'country_id');
    }
}

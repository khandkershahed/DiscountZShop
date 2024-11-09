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
     */
    protected $guarded = [];

    public function added()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }

    public function categoryName()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}

<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table    = 'banners';

    protected $fillable = [
        'name',
        'url',
        'image',
        'added_by',
        'status',
    ];

    public function getFirstImageAttribute()
    {
        return Helper::fileUrl($this->attributes['image']);
    }

    public function getFirstImageOriginalAttribute()
    {
        return $this->attributes['image'];
    }
}

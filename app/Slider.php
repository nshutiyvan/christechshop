<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image'
    ];

    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

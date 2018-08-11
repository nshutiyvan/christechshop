<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','name','image','short_description','long_description','price','color','size'
    ];

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

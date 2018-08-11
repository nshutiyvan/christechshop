<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'email','firstname','lastname','address','phonenumber','city','product_name','product_price','product_quantity',
    ];
}

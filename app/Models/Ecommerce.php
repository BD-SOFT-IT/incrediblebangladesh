<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    protected $fillable =
        ['product_title','product_brand','product_category','product_code','product_price','product_discount',
            'after_discount_price','product_description'];
}

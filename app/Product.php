<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'product_name', 'product_price',  'product_quantity',  'product_description',  'product_photo',
      ];

    protected $dates = ['deleted_at'];
}

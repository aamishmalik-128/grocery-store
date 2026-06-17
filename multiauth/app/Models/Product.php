<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category');
    }
    public function product_variations(){
        return $this->hasMany(ProductVariation::class)->orderBy('sort_order','asc');
    }
}

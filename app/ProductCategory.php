<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }
}

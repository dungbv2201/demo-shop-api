<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'sale_off',
        'category_id',
        'description',
        'image',
        'stock'
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'name',
        'SKU',
        'category_id',
        'Brand_id',
        'unit',
        'price',
        'MainStore',
        'Store2',
        'Store3',
        // 'MainStore_id',
        // 'Store2_id',
        // 'Store3_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    
}

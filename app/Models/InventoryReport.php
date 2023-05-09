<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'sku',
        'categoryName',
        'brandName',
        'price',
        'unit',
        'InstockQnty',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryName');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brandName');
    }
}

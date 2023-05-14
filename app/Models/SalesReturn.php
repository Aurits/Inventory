<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturn extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'date',
        'customerName',
        'storeName',
        'reference',
        'status',
        'payment',
        'Total',
        'productName',
        'quantity',
        'biller',
    ];

     public function product()
    {
        return $this->belongsTo(Product::class, "productName" );
    }

     public function store()
    {
        return $this->belongsTo(Store::class, "storeName");
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerName');
    }
}

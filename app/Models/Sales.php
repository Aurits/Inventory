<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Store;
use App\Models\Product;


class Sales extends Model
{
    use HasFactory;



    protected $fillable = [
        'date',
        'customerName',
        'storeName',
        'referance',
        'status',
        'payment',
        'Total',
        'productName',
        'quantity',
        'Biller',
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

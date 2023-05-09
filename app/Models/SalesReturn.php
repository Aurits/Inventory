<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturn extends Model
{
    use HasFactory;


    protected $fillable = [
        'productName',
        'date',
        'customerName',
        'status',
        'GrandTotal',
        'paid',
        'due',
        'paymentStatus',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerName');
    }
}

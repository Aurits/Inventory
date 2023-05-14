<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'productName',
        'References',
        'customer_id',
        'status',
        'amount',
        'date',
        'description',
        'discount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

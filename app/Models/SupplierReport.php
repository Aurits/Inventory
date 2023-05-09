<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierReport extends Model
{
    use HasFactory;


    protected $fillable = [
        'purchasedDate',
        'productName',
        'purchasedAmount',
        'purchasedQnty',
        'paid',
        'balance',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }
}

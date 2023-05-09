<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturn extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'date',
        'supplierName',
        'reference',
        'status',
        'GrandTotal',
        'paid',
        'due',
        'paymentStatus',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierName');
    }
}

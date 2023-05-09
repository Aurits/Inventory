<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;


    protected $fillable = [
        'SupplierName',
        'References',
        'date',
        'status',
        'GrandTotal',
        'paid',
        'due',
        'paymentStatus',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierName');
    }

    public function purchaseItems()
    {
        return $this->hasMany(PurchaseItem::class);
    }
}

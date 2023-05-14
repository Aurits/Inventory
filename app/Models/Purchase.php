<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;


    protected $fillable = [
        'supplierName',
        'productName',
        'References',
        'date',
        'status',
        'qty',
        'store',
        'due',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierName');
    }

    public function product()
    {
        return $this->belongsTo(Supplier::class, 'productName');
    }

    public function store()
    {
        return $this->belongsTo(Supplier::class, 'storeName');
    }

   
}

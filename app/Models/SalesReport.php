<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'date',
        'customerName',
        'References',
        'status',
        'payment',
        'Total',
        'paid',
        'due',
        'Biller',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerName');
    }
}

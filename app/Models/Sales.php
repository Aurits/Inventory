<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;


    protected $fillable = [
        'date',
        'customerName',
        'Referances',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = [
        'invoiceNumber',
        'customerName',
        'DueDate',
        'amount',
        'paid',
        'amountDue',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerName');
    }
}

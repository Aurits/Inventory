<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReport extends Model
{
    use HasFactory;

    protected $table = 'customer_reports';

    protected $fillable = [
        'customerName',
        'amount',
        'paid',
        'amountDue',
        'status',
        'paumentStatus'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerName');
    }
}

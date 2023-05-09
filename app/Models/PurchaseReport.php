<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReport extends Model
{
    use HasFactory;

    protected $table = 'purchase_reports';
    
    protected $fillable = [
        'productName',
        'purchasedAmount',
        'purchasedQnty',
        'instockQnty',
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }
}


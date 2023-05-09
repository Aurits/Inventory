<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['productName', 'purchasedAmount', 'purchasedQnty', 'instockQnty'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productName');
    }
}

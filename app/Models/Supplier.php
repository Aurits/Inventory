<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplierName',
        'phone',
        'email',
        'country',
        'address',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;


    protected $fillable = [
        'date',
        'References',
        'from',
        'paid',
        'item',
        'GrandTotal'
    ];

    public function paidStore()
    {
        return $this->belongsTo(Store::class, 'paid');
    }

    public function fromStore()
    {
        return $this->belongsTo(Store::class, 'from');
    }
}

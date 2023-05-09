<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'storeName',
        'StoreLocation',
        'phone',
        'email',
        'status',
    ];

    public function location()
    {
        return $this->belongsTo(State::class, 'StoreLocation');
    }
}

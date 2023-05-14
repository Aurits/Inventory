<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Customer extends Model
{
   


    protected $fillable = [
        'user_id',
        'phone',
        'name',
        'email',
        'country',
        'address'

    ];
     use HasFactory;


    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'CategoryName',
        'References',
        'date',
        'status',
        'Amount',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryName');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;


class CategoryListComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('CategoryName', 'ASC')->get();
        return view('livewire.category-list-component',['categories'=>$categories]);
    }
}

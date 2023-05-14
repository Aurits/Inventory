<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Expense;
use Livewire\Component;

class ExpenseListComponent extends Component
{
    public function render()
    {
        $expenses = Expense::orderBy('status', 'ASC')->get();
        $categories = Category::orderBy('categoryName', 'ASC')->get();
        return view('livewire.expense-list-component',['expenses'=>$expenses,'categories'=>$categories]);
    }
}

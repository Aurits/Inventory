<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Category;

class AddExpenseComponent extends Component
{


    public $category;
    public $reference;
    public $amount;
    public $date;
    public $description;
    public $status;

    public function createExpense()
    {
        // Validation code
        // ...

        // 
        Expense::create([
            'CategoryName' => $this->category,
            'References' => $this->reference,
            'date' => $this->date,
            'Amount' => $this->amount,
             'status' => $this->status,
             'description' => $this->description,
            
        ]);

         return redirect()->back()->with('message', 'expense added successfully');
    }

    public function render()
    {

         $categories = Category::orderBy('CategoryName','ASC')->get();
        return view('livewire.add-expense-component',['categories'=>$categories]);
    }
}

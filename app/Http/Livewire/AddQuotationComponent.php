<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Quotation;

class AddQuotationComponent extends Component
{

    public $category;
    public $reference;
    public $amount;
    public $date;
    public $description;
    public $status;

    public function createQuotation()
    {
        // Validation code
        // ...

        // 
        Quotation::create([
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
        return view('livewire.add-quotation-component');
    }
}

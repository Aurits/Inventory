<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Quotation;
use App\Models\Customer;
use App\Models\Product;

class AddQuotationComponent extends Component
{

    public $customer_id;
    public $productName;
    public $amount;
    public $date;
    public $reference;
    public $status;
    public $discount;
    public $description;
    public $customer;

    public function createQuotation()
    {
        // Validation code
        // ...

        Quotation::create([
            'customer_id' => $this->customer_id,
            'References' => $this->reference,
            'productName' => $this->productName,
            'amount' => $this->amount,
             'discount' => $this->discount,
             'date' => $this->date,
             'status' => $this->status,
             'description' => $this->description,
            
        ]);

         return redirect()->back()->with('message', 'expense added successfully');
    }
    public function render()
    {

        $products = Product::orderBy('name','ASC')->get();
        $customers = Customer::orderBy('email','ASC')->get();
        return view('livewire.add-quotation-component',['products'=>$products, 'customers'=>$customers]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Quotation;
use Livewire\Component;

class QuotationListComponent extends Component
{
    public function render()
    {
        $quotations = Quotation::orderBy('status', 'ASC')->get();
        $products = Product::orderBy('name', 'ASC')->get();
        $customers = Customer::orderBy('user_id', 'ASC')->get();
        return view('livewire.quotation-list-component',['quotations'=>$quotations,'products'=>$products,'customers'=>$customers]);
    }
}

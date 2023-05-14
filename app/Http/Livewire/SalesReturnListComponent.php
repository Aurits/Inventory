<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Product;
use App\Models\SalesReturn;
use Livewire\Component;

class SalesReturnListComponent extends Component
{
    public function render()
    {
        $salesReturns = SalesReturn::orderBy('status', 'ASC')->get();
        $customers = Customer::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('productName', 'ASC')->get();

        return view('livewire.sales-return-list-component',['products'=>'$products','salesReturn'=>'$salesReturn','customers'=>'customers']);
    }
}

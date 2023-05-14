<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Sales;
use Livewire\Component;

class SalesListComponent extends Component
{
    public function render()
    {
        $sales = Sales::orderBy('status',  'ASC')->get();
        $customers = Customer::orderBy('user_id', 'ASC')->get();
        return view('livewire.sales-list-component',['sales'=>$sales,'customers'=>$customers]);
    }
}

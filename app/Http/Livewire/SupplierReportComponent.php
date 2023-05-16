<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;
use App\Models\Customer;

class SupplierReportComponent extends Component
{
    public function render()
    {
        $customers = Customer::orderBy('name', 'ASC')->get();
        $sales = Sales::orderBy('payment', 'ASC')->get();
        return view('livewire.supplier-report-component',['customers'=>$customers,'sales'=>$sales]);
    }
}

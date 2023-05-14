<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sales;
use App\Models\Customer;

class SalesReportComponent extends Component
{
    public function render()
    {
        $customers = Customer::orderBy('name', 'ASC')->get();
        $sales = Sales::orderBy('payment', 'ASC')->get();
        return view('livewire.sales-report-component',['customers=>$customers','sales=>$sales']);
    }
}

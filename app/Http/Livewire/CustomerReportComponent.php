<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\CustomerReport;
use Livewire\Component;


class CustomerReportComponent extends Component
{
    public function render()
    {
        $customers = Customer::orderBy('name', 'ASC')->get();
        $customerReports = CustomerReport::orderBy('amount', 'ASC')->get();
        return view('livewire.customer-report-component',['customers'=>$customers,'customerReports'=>$customerReports]);
    }
}

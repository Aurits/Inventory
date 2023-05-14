<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Quotation;

class InvoiceReportComponent extends Component
{
    public function render()
    
    {
        
        $invoiceReports = Invoice::orderBy('customerName', 'ASC')->get();
         $customers = Customer::orderBy('customerName', 'ASC')->get();
         $quotations = Quotation::orderBy('status', 'ASC')->get();
        return view('livewire.invoice-report-component',['invoiceReports'=>$invoiceReports,'customers'=>$customers,'quotations'=>$quotations]);
    }
}

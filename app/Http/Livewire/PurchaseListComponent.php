<?php

namespace App\Http\Livewire;

use App\Models\Purchase;
use App\Models\Supplier;
use Livewire\Component;

class PurchaseListComponent extends Component
{
    public function render()
    {
        $suppliers = Supplier::orderBy('supplierName', 'ASC')->get();
        $purchases = Purchase::orderBy('status', 'ASC')->get();
        return view('livewire.purchase-list-component',['suppliers'=>$suppliers,'purchases'=>$purchases]);
    }
}

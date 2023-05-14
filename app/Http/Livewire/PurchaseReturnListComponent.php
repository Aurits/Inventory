<?php

namespace App\Http\Livewire;

use App\Models\PurchaseReturn;
use App\Models\Supplier;
use Livewire\Component;

class PurchaseReturnListComponent extends Component
{
    public function render()
    {
        $purchaseReturns = PurchaseReturn::orderBy('status', 'ASC')->get();
        $suppliers = Supplier::orderBy('supplierName', 'ASC')->get();
        return view('livewire.purchase-return-list-component',['purchaseReturns'=>$purchaseReturns,'suppliers'=>$suppliers]);
    }
}

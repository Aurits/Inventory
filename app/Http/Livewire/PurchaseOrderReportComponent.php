<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Purchase;
use App\Models\PurchaseOrder;
use App\Models\Supplier;

class PurchaseOrderReportComponent extends Component
{
    public function render()
    {
        $purchaseOrders = PurchaseOrder::orderBy('purchasedQnty', 'ASC')->get();
        $purchases = Purchase::orderBy('status', 'ASC')->get();
        $suppliers= Supplier::orderBy('supplierName', 'ASC')->get();
        return view('livewire.purchase-order-report-component',['purchaseOrders'=>$purchaseOrders,'purchases'=>$purchases, 'suppliers'=>$suppliers]);
    }
}

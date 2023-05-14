<?php

namespace App\Http\Livewire;

use App\Models\PurchaseReport;

use App\Models\Product;
use Livewire\Component;


class PurchaseReportComponent extends Component
{
    public function render()
    {
        $purchaseReports = PurchaseReport::orderBy('purchasedAmount', 'ASC')->get();
        $products = Product::orderBy('name', 'ASC')->get();
        return view('livewire.purchase-report-component',['purchaseReports'=>$purchaseReports, 'products'=>$products]);
    }
}

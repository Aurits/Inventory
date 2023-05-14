<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use App\Models\InventoryReport;
use App\Models\Store;

class InventoryReportComponent extends Component
{
    public function render()
    {
        $inventoryReports = InventoryReport::orderBy('price', 'ASC')->get();
        $products = Product::orderBy('name', 'ASC')->get();
        $brands= Brand::orderBy('BrandName', 'ASC')->get();
        $stores= Store::orderBy('storeName', 'ASC')->get();
        return view('livewire.inventory-report-component',['inventoryReports'=>$inventoryReports,'products'=>'$products','brands'=>'$brands','stores'=>'$stores']);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Supplier;
use Livewire\Component;

class SupplierListComponent extends Component
{
    public function render()
    {
        $suppliers = Supplier::orderBy('supplierName', 'ASC')->get();
        $countries = Country::orderBy('countryName', 'ASC')->get();
        return view('livewire.supplier-list-component',['suppliers'=>$suppliers,'countries'=>$countries]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class BrandListComponent extends Component
{
    public function render()
    {
        $brands = Brand::orderBy('BrandName', 'ASC')->get();
        return view('livewire.brand-list-component',['brands'=>$brands]);
    }
}

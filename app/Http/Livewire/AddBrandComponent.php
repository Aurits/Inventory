<?php

namespace App\Http\Livewire;
use App\Models\Brand;

use Livewire\Component;

class AddBrandComponent extends Component
{
    public $brandName;
    public $description;


    public function createBrand(){


        Brand::create([
            'BrandName' => $this->brandName,
            'BrandDescription' => $this->description,
           
        ]);

    return redirect()->back()->with('message', 'brand added successfully');
    }


    public function render()
    {
        return view('livewire.add-brand-component');
    }
}

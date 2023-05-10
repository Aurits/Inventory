<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddProductComponent extends Component
{

    public $products;
    public $image;
    public $name;
    public $SKU;
    public $category_id;
    public $brand_id;
    public $unit;
    public $price;
    public $mainStore;
    public $store2;
    public $store3;
    public $mainStore_id;
    public $store2_id;
    public $store3_id;
    public $selectedProductId;

      public function createProduct()
    {
        $validatedData = $this->validate([
            'image' => 'required',
            'name' => 'required',
            'SKU' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'mainStore' => 'required',
            'store2' => 'required',
            'store3' => 'required',
            'mainStore_id' => 'required',
            'store2_id' => 'required',
            'store3_id' => 'required',
        ]);

        Product::create($validatedData);

        $this->resetForm();
    }



     private function resetForm()
    {
        $this->image = '';
        $this->name = '';
        $this->SKU = '';
        $this->category_id = '';
        $this->brand_id = '';
        $this->unit = '';
        $this->price = '';
        $this->mainStore = '';
        $this->store2 = '';
        $this->store3 = '';
        $this->mainStore_id = '';
        $this->store2_id = '';
        $this->store3_id = '';
        $this->selectedProductId = null;
    }

        
    public function render()
    {
        return view('livewire.add-product-component');
    }
}

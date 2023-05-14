<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Livewire\Component;

class AddProductComponent extends Component
{

    public $image;
    public $name;
    public $SKU;
    public $category;
    public $brand;
    public $unit;
    public $price;
    public $mainStore;
    public $store2 = 0;
    public $store3 = 0;
    

      public function createProduct()
    {
        // $validatedData = $this->validate([
        //     // 'image' => 'required',
        //     'name' => 'required',
        //     'SKU' => 'required',
        //     'category' => 'required',
        //     'brand' => 'required',
        //     'unit' => 'required',
        //     'price' => 'required',
        //     'mainStore' => 'required',
        //     'store2' => 'required',
        //     'store3' => 'required',
            
        // ]);

        // Product::create($validatedData);
        Product::create([
            'name' => $this->name,
            'SKU' => $this->SKU,
            'category_id' => $this->category,
            'Brand_id' => $this->brand,
             'unit' => $this->unit,
             'price' => $this->price,
             'MainStore' => $this->mainStore,
             'Store2' => $this->store2,
             'Store3' => $this->store3,

            
        ]);

         return redirect()->back()->with('message', 'product added successfully');

        $this->resetForm();
    }



     private function resetForm()
    {
        $this->name = '';
        $this->SKU = '';
        $this->category = '';
        $this->brand = '';
        $this->unit = '';
        $this->price = '';
        $this->mainStore = '';
        $this->store2 = '';
        $this->store3 = '';
       
    }

        
    public function render()
    {

        $brands = Brand::orderBy('brandName','ASC')->get();
        $categories = Category::orderBy('categoryName','ASC')->get();
        return view('livewire.add-product-component',['categories'=>$categories , 'brands'=>$brands]);
    }
}

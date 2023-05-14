<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Livewire\Component;

class ProductListComponent extends Component
{

    public function render()
    {
        $products = Product::orderBy('name', 'ASC')->get();
        $categories = Category::orderBy('CategoryName', 'ASC')->get();
        $brands = Brand::orderBy('BrandName', 'ASC')->get();
        $stores = Store::orderBy('storeName', 'ASC')->get();
        return view('livewire.product-list-component',['products'=>$products,'categories'=>$categories,'brands'=>$brands,'stores'=>$stores]);
    }
}

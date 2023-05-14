<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Purchase;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Store;


class AddPurchaseComponent extends Component
{


        public $supplierName;
        public $productName;
        public $References;
        public $date;
        public $status;
        public $qty;
        public $store;
        public $due;

        public function createPurchase(){
           

           // Validation code
        // ...


        Purchase::create([
           
        'supplierName'=>$this->supplierName,
        'productName'=>$this->productName,
        'References'=>$this->References,
        'date'=>$this->date,
        'status'=>$this->status,
        'qty'=>$this->qty,
        'store'=>$this->store,    
        ]);

           // Update product value
        $product = Product::where('id', $this->productName)->first();
        if ($product) {
            $product->MainStore += $this->qty;
           
            $product->save();
        }

         return redirect()->back()->with('message', 'purchase added successfully');
        }


    public function render()
    {

        $products = Product::orderBy('name','ASC')->get();
        $suppliers = Supplier::orderBy('supplierName','ASC')->get();
        $stores = Store::orderBy('storeName','ASC')->get();

        return view('livewire.add-purchase-component',['products'=>$products, 'suppliers'=>$suppliers, 'stores'=>$stores]);
    }
}

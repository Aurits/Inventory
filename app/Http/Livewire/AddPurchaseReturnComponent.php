<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PurchaseReturn;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Store;

class AddPurchaseReturnComponent extends Component
{
    

        public $supplierName;
        public $productName;
        public $reference;
        public $date;
        public $status;
        public $qty;
        public $store;
        public $due;

        public function createPurchaseReturn(){
           

           // Validation code
        // ...

        PurchaseReturn::create([
           
        'supplierName'=>$this->supplierName,
        'productName'=>$this->productName,
        'reference'=>$this->reference,
        'date'=>$this->date,
        'status'=>$this->status,
        'qty'=>$this->qty,
        'store'=>$this->store,    
        ]);

         return redirect()->back()->with('message', 'purchase added successfully');




        }


    public function render()
    {

        $products = Product::orderBy('name','ASC')->get();
        $suppliers = Supplier::orderBy('supplierName','ASC')->get();
        $stores = Store::orderBy('storeName','ASC')->get();

        return view('livewire.add-purchase-return-component',['products'=>$products, 'suppliers'=>$suppliers, 'stores'=>$stores]);
    }
}

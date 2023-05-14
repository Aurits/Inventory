<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Store;
use App\Models\Product;
use App\Models\SalesReturn;

class NewSalesReturnComponent extends Component
{
   
    public $customer;
    public $productid;
    public $store;
    public $date;
    public $reference;
    public $total;
    public $payment;
    public $quantity;
    public $biller;
    public $status;

    public function createSaleReturn(){
        


            //validation

            SalesReturn::create([
                'customerName'=>$this->customer,
                'date'=>$this->date,
                'storeName'=>$this->store,
                'productName'=>$this->productid,
                'reference'=>$this->reference,
                'status'=>$this->status,
                'Total'=>$this->total,
                'quantity'=>$this->quantity,
                'biller'=>$this->biller,

            ]);

        return redirect()->back()->with('message', 'sale added successfully');
    }

    public function render()
    {
        $products = Product::orderBy('name','ASC')->get();
        $customers = Customer::with('user')->orderBy('email','ASC')->get();
        $stores = Store::orderBy('storeName','ASC')->get();

        return view('livewire.new-sales-return-component', [
            'stores' => $stores,
            'customers' => $customers,
            'products' => $products,
        ]);
    }
}

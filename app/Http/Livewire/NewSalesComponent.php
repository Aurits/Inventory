<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Store;
use App\Models\Product;
use App\Models\Sales;

class NewSalesComponent extends Component
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

    public function createSale(){
        


            //validation

            Sales::create([
                'customerName'=>$this->customer,
                'date'=>$this->date,
                'storeName'=>$this->store,
                'ProductName'=>$this->productid,
                'reference'=>$this->reference,
                'status'=>$this->status,
                'payment'=>$this->payment,
                'Total'=>$this->total,
                'qty'=>$this->quantity,
                'Biller'=>$this->biller,

            ]);

        return redirect()->back()->with('message', 'sale added successfully');
    }

    public function render()
    {
        $products = Product::orderBy('name','ASC')->get();
        $customers = Customer::with('user')->orderBy('email','ASC')->get();
        $stores = Store::orderBy('storeName','ASC')->get();

        return view('livewire.new-sales-component', [
            'stores' => $stores,
            'customers' => $customers,
            'products' => $products,
        ]);
    }
}

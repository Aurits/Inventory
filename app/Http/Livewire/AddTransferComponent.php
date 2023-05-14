<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transfer;
use App\Models\Product;
use App\Models\Store;

class AddTransferComponent extends Component
{
    public $quantity;
    public $status;
    public $productName;
    public $date;
    public $reference;
    public $from;
    public $to;
   
    public function createTransfer()
    {
        // Validation code
        // ...
        Transfer::create([
            'qty' => $this->quantity,
            'References' => $this->reference,
            'productName' => $this->productName,
            'from' => $this->from,
             'paid' => $this->to,
             'date' => $this->date,
             'status' => $this->status,
                       
        ]);

        // Update product value
        $product = Product::where('id', $this->productName)->first();
        if ($product) {
            $product->MainStore -= $this->quantity;
            if ($this->to == 1) {
            $product->Store2 += $this->quantity;
            }
            $product->Store3 += $this->quantity;

            $product->save();
        }

         return redirect()->back()->with('message', 'transfer added successfully');
    }
    public function render()
    {

        $products = Product::orderBy('name','ASC')->get();
        $stores = Store::orderBy('storeName','ASC')->get();
        return view('livewire.add-transfer-component',['products'=>$products,'stores'=>$stores]);
    }
}

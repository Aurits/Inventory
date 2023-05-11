<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Store;
use App\Models\State;

class AddStoreComponent extends Component
{


    public $storeName;
    public $StoreLocation;
    public $phone;
    public $email;
    public $status;
   

    public function createStore()
    {
        // Validation code
        // ...

        // 
        Store::create([

            'storeName' => $this->storeName,
            'StoreLocation' => $this->StoreLocation,
            'phone' => $this->phone,
            'email' => $this->email,
            'status' => $this->status,
            
        ]);

         return redirect()->back()->with('message', 'store added successfully');
    }

    public function render()
    {

    $states = State::orderBy('stateName','ASC')->get();
        return view('livewire.add-store-component',['states'=>$states]);
    }
}

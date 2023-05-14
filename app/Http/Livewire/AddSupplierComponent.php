<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Supplier;

class AddSupplierComponent extends Component
{



    public $name;
    public $email;
    public $phone;
    public $address;
    public $country;

    public function addSupplier()
    {
        // Validation code
        // ... 


        Supplier::create([
            'supplierName' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'address' => $this->address,
        ]);

        return redirect()->back()->with('message', 'Supplier added successfully');

    }

    public function render()
    {
        $countries = Country::orderBy('countryName','ASC')->get();
       
        return view('livewire.add-supplier-component',['countries'=>$countries]);
    }
}

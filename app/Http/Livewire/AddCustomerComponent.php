<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;
use App\Models\Customer;

class AddCustomerComponent extends Component
{


    
    public $name;
    public $email;
    public $phone;
    public $address;
    public $country;
    public $fullname;

    public function addCustomer()
    {
        // Validation code
        // ... 


        Customer::create([
            'customerName' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'name' => $this->fullname,
            'country' => $this->country,
            'address' => $this->address,
        ]);

        return redirect()->back()->with('message', 'Supplier added successfully');

    }

    public function render()
    {
        $countries = Country::orderBy('countryName','ASC')->get();
         $users = User::orderBy('name','ASC')->get();
        return view('livewire.add-customer-component',['countries'=>$countries, 'users'=>$users]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Customer;
use Livewire\Component;

class CustomerListComponent extends Component
{
    public function render()
    {
        $customers= Customer::orderBy('user_id', 'ASC')->get();
        $countries = Country::orderBy('countryName', 'ASC')->get();
        return view('livewire.customer-list-component',['customers'=>$customers,'countries'=>$countries]);
    }
}

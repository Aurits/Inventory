<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class CountryListComponent extends Component
{
    public function render()
    {
        $countries = Country::orderBy('countryName', 'ASC')->get();
        return view('livewire.country-list-component',['countries'=>$countries]);
    }
}

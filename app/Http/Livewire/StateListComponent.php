<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class StateListComponent extends Component
{
    public function render()
    {
        $states = State::orderBy('stateName', 'ASC')->get();
        $countries = Country::orderBy('countryName', 'ASC')->get();
        return view('livewire.state-list-component',['states'=>$states,'countries'=>$countries]);
    }
}

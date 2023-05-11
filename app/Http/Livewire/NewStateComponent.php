<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;

class NewStateComponent extends Component
{

    public $stateName;
    public $country;
    public $status;
   

    public function createState()
    {
        // Validation code
        // ...

        // 
        State::create([

            'stateName' => $this->stateName,
            'countryName' => $this->country,
            'status' => $this->status,
            
        ]);

         return redirect()->back()->with('message', 'state added successfully');
    }

    public function render()
    {
         $countries = Country::orderBy('CountryName','ASC')->get();
        return view('livewire.new-state-component',['countries'=>$countries]);
    }
}

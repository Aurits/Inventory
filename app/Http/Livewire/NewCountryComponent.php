<?php

namespace App\Http\Livewire;
use App\Models\Country;
use Livewire\Component;

class NewCountryComponent extends Component
{
public $countryName;
public $regionName;
    public $status;
  public function newCountry(){


        Country::create([
            'countryName' => $this->countryName,
            'region' => $this->regionName,
              'status' => $this->status,
           
           
        ]);

    return redirect()->back()->with('message', 'country added successfully');
    }

    public function render()
    {
        return view('livewire.new-country-component');
    }
}

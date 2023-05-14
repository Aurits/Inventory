<?php

namespace App\Http\Livewire;

use App\Models\State;
use App\Models\Store;
use Livewire\Component;

class StoreListComponent extends Component
{
    public function render()
    {
        $states = State::orderBy('stateName', 'ASC')->get();
        $stores = Store::orderBy('storeName', 'ASC')->get();
        return view('livewire.store-list-component',['states'=>$states,'stores'=>$stores]);
    }
}

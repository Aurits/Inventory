<?php

namespace App\Http\Livewire;

use App\Models\Store;
use App\Models\Transfer;
use Livewire\Component;

class TransferListComponent extends Component
{
    public function render()
    {
        $transfers = Transfer::orderBy('status', 'ASC')->get();
        $stores = Store::orderBy('storeName', 'ASC')->get();
        return view('livewire.transfer-list-component',['transfers'=>$transfers,'stores'=>$stores]);
    }
}

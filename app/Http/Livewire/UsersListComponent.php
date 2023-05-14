<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersListComponent extends Component
{
    public function render()
    {
        $users = User::orderBy('name', 'ASC')->get();
        return view('livewire.users-list-component',['users'=>$users]);
    }
}

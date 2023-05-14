<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class NewUserComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $role;
    public $country;

    public function newUser()
    {
        // Validation code
        // ... 

        $hashedPassword = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'utype' => $this->role,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'password' => $hashedPassword,
        ]);

        return redirect()->back()->with('message', 'User added successfully');
    }

    public function render()
    {
        $users = User::orderBy('name', 'ASC')->get();
        return view('livewire.new-user-component', ['users' => $users]);
    }
}

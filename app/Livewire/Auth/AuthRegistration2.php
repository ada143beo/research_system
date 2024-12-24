<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class AuthRegistration2 extends Component
{
    public $name;
    public $password;
    public $role;
    public $roles;

    public function mount()
    {

        if (!session('email')) {
            return redirect()->to('/register');
        }

        $this->roles = Role::all();
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'password' => 'required|min:6',
        'role' => 'required|exists:roles,id',
    ];

    public function register()
    {
        $this->validate();


        $user = User::create([
            'name' => $this->name,
            'email' => session('email'),
            'password' => Hash::make($this->password),
        ]);


        UserRole::create([
            'user_id' => $user->id,
            'role_id' => $this->role,
        ]);


        session()->forget('email');
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function render()
    {
        return view('livewire.auth.auth-registration2');
    }
}

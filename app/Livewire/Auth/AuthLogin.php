<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRole;

class AuthLogin extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();


        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();


            $userRole = UserRole::where('user_id', $user->id)->first();

            if ($userRole && $userRole->role) {

                switch ($userRole->role->role_name) {
                    case 'Faculty':
                        return redirect()->route('faculty');
                    case 'UREC':
                        return redirect()->route('urec');
                    case 'REC':
                        return redirect()->route('rec');
                    case 'TEC':
                        return redirect()->route('tec');
                    case 'Research Director':
                        return redirect()->route('director-dashboard');
                    default:
                        Auth::logout();
                        session()->flash('error', 'Unauthorized access.');
                        return redirect()->route('login');
                }
            } else {
                Auth::logout();
                session()->flash('error', 'Role not assigned.');
                return redirect()->route('login');
            }
        }

        session()->flash('error', 'Invalid credentials.');
    }

    public function render()
    {
        return view('livewire.auth.auth-login');
    }
}

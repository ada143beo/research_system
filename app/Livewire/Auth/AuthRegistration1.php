<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Email;

class AuthRegistration1 extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        if (Email::where('email', $this->email)->exists()) {
            session(['email' => $this->email]);
            return redirect()->to('/register-step2');
        } else {
            $this->addError('email', 'This email is not pre-registered.');
        }
    }

    public function render()
    {
        return view('livewire.auth.auth-registration1');
    }
}

<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AuthForgotPassword extends Component
{
    #[Layout('components.layouts.home-login-reg')]
    public function render()
    {
        return view('livewire.auth.auth-forgot-password');
    }
}

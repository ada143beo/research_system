<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('status', __('We have emailed your password reset link!'));
        } else {
            session()->flash('error', __('Unable to send reset link. Please check your email.'));
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}

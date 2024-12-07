<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    #[Layout('components.layouts.home-login-reg')]
    public function render()
    {
        return view('livewire.home.home-page');
    }
}

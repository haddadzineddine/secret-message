<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\UserInfo;

class NavBar extends Component
{
    public $tabs = [
        'home' => 'Home',
        'dashboard' => 'Dashboard',
    ];

    public function render()
    {
        return view('livewire.nav-bar');
    }
}

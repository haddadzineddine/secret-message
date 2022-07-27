<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\UserInfo;

class NavBar extends Component
{
    use UserInfo;

    public $tabs = [
        'home' => 'Home',
        'dashboard' => 'Dashboard',
    ];

    public function render()
    {
        if ($this->getUserInfo()) {
            $this->tabs['inbox'] = 'Inbox';
        }
        
        return view('livewire.nav-bar');
    }
}

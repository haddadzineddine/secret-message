<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $tabs = [
        'dashboard' => 'Dashboard',
        'inbox' => 'Inbox',
    ];

    public $activeTab = 'inbox';

    public function render()
    {
        return view('livewire.home');
    }
}

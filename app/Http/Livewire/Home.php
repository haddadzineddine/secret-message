<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $activeTab = 'dashboard';

    public function render()
    {
        return view('livewire.home');
    }
}

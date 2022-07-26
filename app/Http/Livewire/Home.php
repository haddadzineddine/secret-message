<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $activeTab = 'home';

    public function render()
    {
        return view('livewire.home');
    }
}

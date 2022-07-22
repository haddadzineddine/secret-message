<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Home extends Component
{

    public $activeTab = 'dashboard';

    public function render()
    {
        return view('livewire.home');
    }
}

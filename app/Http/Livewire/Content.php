<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $activeTab ;

    public function render()
    {
        return view('livewire.content');
    }
}

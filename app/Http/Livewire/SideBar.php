<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class SideBar extends Component
{
    public $activeTab;
    
    public function render()
    {
        return view('livewire.side-bar');
    }

    public function selectTab($tab)
    {
        $this->emit('change-tab', $tab);
        $this->activeTab = $tab;
    }

    public function isActive($tab)
    {
        return $this->activeTab === $tab;
    }
}

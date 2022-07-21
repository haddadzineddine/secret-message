<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SideBar extends Component
{
    public $activeTab;
    
    public function render()
    {
        return view('livewire.side-bar');
    }

    public function selectTab($tab)
    {
        $this->emit('select-tab', $tab);
    }

    public function isActive($tab)
    {
        if ($this->activeTab === $tab) {
            return "bg-green-600 text-white";
        }

        return "hover:bg-green-600 hover:text-white text-gray-500";
    }
}

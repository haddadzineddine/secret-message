<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $activeTab;

    protected $listeners = ['change-tab' => 'changeTab'];

    public function render()
    {
        return view('livewire.content');
    }

    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }
}

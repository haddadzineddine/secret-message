<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    protected $listeners = ['select-tab' => 'selectTab'];

    public $tabs = [
        'dashboard' => 'Dashboard',
        'inbox' => 'Inbox',
    ];

    public $activeTab = 'dashboard';

    public function render()
    {
        return view('livewire.home');
    }

    public function selectTab($tab)
    {
        dd($tab);
        $this->activeTab = $tab;
    }
}

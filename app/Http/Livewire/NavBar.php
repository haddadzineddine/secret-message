<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\UserInfo;

class NavBar extends Component
{
    use UserInfo;

    public $activeTab;

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

    public function selectTab($tab)
    {
        if (in_array($tab, array_keys($this->tabs))) {
            $this->emit('change-tab', $tab);
            $this->activeTab = $tab;
        }
    }

    public function isActive($tab)
    {
        return $this->activeTab === $tab;
    }
}

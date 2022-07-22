<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Inbox extends Component
{
    public $readyToLoad = false;

    public $user;

    public function loadMessages()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.inbox', [
            'messages' => $this->readyToLoad ? Message::where('user_id', $this->user->id)->latest()->get() : [],
        ]);
    }

    public function mount()
    {
        $username = Cookie::get('username');
        $this->user = User::where('username', $username)->first();
    }
}

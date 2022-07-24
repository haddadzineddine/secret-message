<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Traits\UserInfo;
use Livewire\Component;

class Inbox extends Component
{
    use UserInfo;

    public $readyToLoad = false;

    public function loadMessages()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.inbox', [
            'messages' => $this->readyToLoad ? Message::where('user_id', $this->getUserInfo()->id)
                ->latest()
                ->get()
            : [],
        ]);
    }
}

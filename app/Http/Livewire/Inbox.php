<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Inbox extends Component
{
    public $readyToLoad = false;
 
    public function loadMessages()
    {
        $this->readyToLoad = true;
    }
    
    
    public function render()
    {
        return view('livewire.inbox', [
            'messages' => $this->readyToLoad ? Message::all() : [],
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class SendMessageForm extends Component
{
    public $message;

    public $user;

    public function render()
    {
        return view('livewire.send-message-form');
    }

    public function sendMessage()
    {
        $this->validate([
            'message' => 'required|min:3',
        ]);

        Message::create([
            'message' => $this->message,
            'user_id' => $this->user->id,
        ]);

        $this->message = '';

        $this->dispatchBrowserEvent('message-sent');
    }
}

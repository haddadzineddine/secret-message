<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Traits\UserInfo;
use Livewire\Component;

class SendMessageForm extends Component
{
    use UserInfo;

    public $message;

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
            'user_id' => $this->getUserInfo()->id,
        ]);

        $this->message = '';

        $this->dispatchBrowserEvent('message-sent');
    }
}

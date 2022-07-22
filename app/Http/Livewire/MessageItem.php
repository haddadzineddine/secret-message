<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageItem extends Component
{
    public $message;

    protected function getListeners()
    {
        return ['message'.$this->message->id.'-is-read' => 'isRead'];
    }

    public function render()
    {
        return view('livewire.message-item');
    }

    public function showSecretMessage()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'message' => $this->message->message,
            'id' => $this->message->id,
        ]);
    }

    public function isRead()
    {
        if ($this->message->is_read) {
            return;
        }

        $this->message->is_read = true;
        $this->message->save();
    }
}

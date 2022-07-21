<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageItem extends Component
{
    public function render()
    {
        return view('livewire.message-item');
    }

    public function showSecretMessage($content='bla bla bla')
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => '🔥  You received a message ',
                'text' => $content ,
            ]);
    }
}

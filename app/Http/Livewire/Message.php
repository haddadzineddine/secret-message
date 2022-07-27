<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Message as MessageModel;
use App\Traits\UserInfo;
use Livewire\Component;

class Message extends Component
{
    use UserInfo;

    public $user;
    public $secretMessage;

    public function render()
    {
        return view('livewire.message');
    }
    
    public function sendMessage()
    {
        $this->validate([
            'secretMessage' => 'required|min:3',
        ]);

        MessageModel::create([
            'message' => $this->secretMessage,
            'user_id' => $this->getUserInfo()->id,
        ]);

        $this->secretMessage = '';

        $this->dispatchBrowserEvent('message-sent');
    }

    public function mount($user_name)
    {
        $this->user = User::where('username', $user_name)->first();

        if (! $this->user) {
            abort(404);
        }
    }
}

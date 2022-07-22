<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Traits\UserInfo;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads, UserInfo;

    public $username;

    public $image;

    public $link;

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function showUploadImage()
    {
        $this->dispatchBrowserEvent('showUploadImage');
    }

    public function saveUser()
    {
        $this->validate([
            // 'image' => 'image|max:1024', // 1MB Max
            'username' => 'required|min:3|max:255|unique:users',
        ]);

        $user = User::create([
            'username' => $this->username,
            'link' => url($this->username),
            'image' => $this->image?->store('images', 'public'),
        ]);

        $this->link = $user->link;

        Cookie::queue('username', $user->username);

        return redirect()->to('/');
    }

    public function copyToClipboard()
    {
        $this->dispatchBrowserEvent('copyToClipboard', [
            'link' => $this->link ?? $this->getUserInfo()->link,
        ]);
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('username'));

        return redirect()->to('/');
    }
}

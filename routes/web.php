<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\Inbox;
use App\Http\Livewire\Message;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/inbox', Inbox::class)->name('inbox');
Route::get('/{user_name}', Message::class)->name('message');

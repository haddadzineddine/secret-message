<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\Inbox;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/inbox', Inbox::class)->name('inbox');

<?php

use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', Home::class);
Route::get('/{user_name}', [MessageController::class, 'index']);

<?php

use App\Http\Controllers\MessageController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/{user_name}', [MessageController::class, 'index']);

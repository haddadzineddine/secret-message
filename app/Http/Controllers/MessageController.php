<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request, $user_name)
    {
        $user = User::where('username', $user_name)->first();

        if (!$user) {
            abort(404);
        }

        return view('send-message', [
            'user' => $user,
        ]);
    }
}

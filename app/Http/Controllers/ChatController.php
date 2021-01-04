<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function chat()
    {
        $chat = Auth::user()->chatWith(2);

        return response()->json(['messages' => $chat]);
    }
}

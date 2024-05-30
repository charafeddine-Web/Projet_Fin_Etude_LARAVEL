<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        // Fetch all messages from the database
        // $messages = Message::all();

        // // Count new messages
        // $newMessagesCount = Message::where('created_at', '>', now()->subDay())->count();

        // Return the view with messagescompact('messages', 'newMessagesCount')
        return view('messages' );
    }
}

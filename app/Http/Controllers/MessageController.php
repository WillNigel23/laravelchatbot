<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $messages = auth()->user()->messages()->orderBy('created_at', 'asc')->get();

            return view('dashboard', ['messages' => $messages]);
        } else {
            return view('welcome');
        }
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        if (auth()->check()) {
            $message = new Message();
            $message->user_id = auth()->id();
            $message->content = $request->input('content');
            $message->save();

            return view('messages.partials.user-message', ['message' => $message]);
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to send messages.');
        }
    }

    public function genResponse($message_id)
    {
        $message = Message::find($message_id);

        if ($message) {
            $response = $message->generateResponse();

            $message->response = $response;
            $message->save();

            return view('messages.partials.response', ['response' => $response]);
        } else {
            return redirect()->route('dashboard')->with('error', 'Error generating response');
        }
    }
}

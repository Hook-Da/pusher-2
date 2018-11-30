<?php

namespace App\Http\Controllers;

use App\User;

use App\Event\ChatEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
	public function __construct()
	{
	}
    public function chat()
    {
    	return view('chat');
    }
    public function envokeEvent(Request $request)
    {
    	$user = Auth::user();
    	event(new ChatEvent($request->message,$user));
    }
    public function send()
    {
    	$user = Auth::user();
    	$message = 'Here';
    	event(new ChatEvent($message,$user));
    }
}

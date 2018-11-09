<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('chat');
  }

  public function fetchMessages(Request $request)
  { $user = Auth::user();

    return Message::with('user')->where('peer_id',$request->input('peer_id'))->where('user_id',$user->id)->orWhere('peer_id',$user->id)->where('user_id',$request->input('peer_id'))->get();
  }

  public function sendMessage(Request $request)
  {
    $user = Auth::user();

    $message = $user->messages()->create([
      'message' => $request->input('message'),
      'host_id' => $user->id,
      'peer_id' => $request->input('peer_id'),

    ]);

    broadcast(new MessageSent($user, $message))->toOthers();

    return ['status' => 'Message Sent!'];
  }
}

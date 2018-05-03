<?php

namespace App\Http\Controllers;

use App\User;
use App\message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show chats
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('chat');
  }

  /**
   * Fetch all messages
   *
   * @return message
   */
  public function fetchMessages()
  {
    return message::with('user')->get();
  }

  /**
   * Persist message to database
   *
   * @param  Request $request
   * @return Response
   */
  public function sendMessage(Request $request)
  {
    $user = Auth::user();

    $message = $user->messages()->create([
      'message' => $request->input('message')
    ]);

    broadcast(new MessageSent($user, $message))->toOthers();

    return ['status' => 'message Sent!'];
  }
}

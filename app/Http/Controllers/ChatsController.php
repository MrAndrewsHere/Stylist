<?php

namespace App\Http\Controllers;

use App\message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;
use Illuminate\Support\Carbon;

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

  public function sendnewmessage(Request $request)
  {
      $peer_id = $request->input('peer_id');
      $user = User::find($peer_id);
      return view('blocks.newmessage',compact('user'));
  }

  public function fetchMessages(Request $request)
  { $user = Auth::user();

    return Message::with('user')->where('peer_id',$request->input('peer_id'))->where('user_id',$user->id)->orWhere('peer_id',$user->id)->where('user_id',$request->input('peer_id'))->get();
  }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        $peer_ID = $request->input('peer_id');

        $message = $user->messages()->create([
            'message' => $request->input('message'),
            'host_id' => $user->id,
            'peer_id' => $peer_ID,

        ]);

        broadcast(new MessageSent($user, $message))->toOthers();


        if($user->peers->contains('peer_id',$peer_ID))
        {  $user->peers->find($peer_ID);
            $peer =  $user->peers->where('peer_id',$peer_ID)->first();
            $peer->updated_at = Carbon::now();
            $peer->save();
            $temp = User::find($peer_ID);
            $temp1 = $temp->peers->where('peer_id','=',$user->id)->first();
            $temp1->updated_at = Carbon::now();
            $temp->save();
        }
        else
        {

            $user->peers()->create(['peer_id' => $peer_ID]);
            User::find($peer_ID)->peers()->create(['peer_id' => $user->id]);
        }
        return ['status' => 'Message Sent!'];
    }
}

<?php

namespace App\Http\Controllers;

use App\stylist;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use ElForastero\Transliterate;

class StylistController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('stylist');
  }

  public function lk_stylist()
  {
    $orders = null;
    try {
      $orders = Auth::user()->stylist->orders->where('Ordered', '1');
    } catch (\ErrorException $error) {

    }

    return view('stylist.lk-stylist', compact('orders'));
  }

  protected function store(Request $request)
  {
    $data = $request;
    $user = Auth::user();

    $user->update([
      'name' => $data->name,
      'second_name' => $data->second_name,
      'city' => $data->city,
      'cityTranslit' => Transliterate\Transliteration::make($data->city),
    ]);

    $user->stylist->update([
      'education' => $data->education,
      'about' => $data->about
    ]);

    if ($request->hasFile('avatar')) {
      $picture = $request->file('avatar');

      $oldPath = $user->avatar;

      if ($user->update(['avatar' => Storage::url(Storage::putFile('public/avatars', $picture))]) !== 0) {
         Storage::delete('public/avatars/'.substr($oldPath,17));
        $request->session()->flash('success', 'Данные успешно сохранены');
        return redirect('/settings');
      } else
        $request->session()->flash('Error', 'Ошибка');

    }

    $request->session()->flash('error', 'Упс, ошибка!');
    return redirect('/settings');
  }
}

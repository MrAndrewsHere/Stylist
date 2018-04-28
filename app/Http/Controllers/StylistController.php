<?php

namespace App\Http\Controllers;

use App\Stylist;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StylistController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('stylist');
  }

  public function lk_stylist()
  { $orders = null;
    try
    {
      $orders = Auth::user()->stylist->orders->where('Ordered','1');
    }
    catch (\ErrorException $error)
    {

    }

    return view('Stylist.lk-stylist', compact('orders'));
  }

  protected function store(Request $request)
  {
    $data = $request;
    Auth::user()->update(['name' => $data->name, 'second_name' => $data->second_name,]);
    Auth::user()->stylist->update(['education'=>$data->education,'about' => $data->about, 'education' => $data->education]);
    if ($request->hasFile('avatar'))
      $picture = $request->file('avatar');
      if (Auth::user()->update(['avatar' => Storage::url(Storage::putFile('public/avatars',$picture))]) !== 0)
        $request->session()->flash('Error', 'Ошибка');
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }



}

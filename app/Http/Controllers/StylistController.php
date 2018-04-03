<?php

namespace App\Http\Controllers;

use App\Stylist;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class StylistController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('stylist');
  }

  public function lk_stylist()
  {
    return view('Stylist.lk-stylist');
  }

  protected function store(Request $request)
  {
    $data = $request;

    Auth::user()->update(['name' => $data->name, 'second_name' => $data->second_name,]);
    Auth::user()->stylist->update(['education'=>$data->education,'about' => $data->about, 'education' => $data->education]);
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }
}

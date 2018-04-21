<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('client');
  }

  public function lk_client()
  {
    return view('Client.lk-client');
  }


  public function my_style()
  {
    return view('Client.my-style');
  }
  protected function store(Request $request)
  {
    $data = $request;

    Auth::user()->update(['name' => $data->name, 'second_name' => $data->second_name,]);
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }
  protected function ordered(Request $request)
  {
    $service = Auth::user()->client->orders->where('service_id',$request->input('s'))->first();
    $service->ordered = 1;
    $service->save();
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/my_orders');

  }
}

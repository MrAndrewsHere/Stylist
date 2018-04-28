<?php

namespace App\Http\Controllers;

use App\Client;
use App\Order;
use App\Service;
use App\Stylist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
  protected function delete_order(Request $request)
  {
    try
    {
      $order = Order::find($request->input('id'));
      $order->delete();
      return 'OK';
    }
    catch (\Exception $exception)
    { }

  }

  public function add_service_to_client(Request $request)
  {

      $service = Service::find($request->input('service_id'));
    $stylist = $service->stylists->find($request->input('stylist_id'));
      if($stylist !== null && $service !== null) {
        Order::create(['client_id' => Auth::user()->client->id, 'service_id' => $service->id, 'stylist_id' => $stylist->id, 'price' => $service->priceForStylist($stylist)]);
        return $success = 'Услуга добавлена';
      }

    return $error = 'Извините, что-то пошло не так';
  }
  protected function store(Request $request)
  {
    $data = $request;
    Auth::user()->update(['name' => $data->name, 'second_name' => $data->second_name,]);
    if ($request->hasFile('avatar')) {
      $picture = $request->file('avatar');
      if (Auth::user()->update(['avatar' => Storage::url(Storage::putFile('public/avatars', $picture))]) !== 0)
        $request->session()->flash('Error', 'Ошибка');
    }
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }
  protected function ordered(Request $request)
  {
    $service = Auth::user()->client->orders->where('service_id',$request->input('s'))->first();
    $service->ordered = 1;
    $service->save();
    return "Услуга заказана";

  }
}

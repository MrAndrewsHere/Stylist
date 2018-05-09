<?php

namespace App\Http\Controllers;

use App\client;
use App\Order;
use App\service;
use App\stylist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use ElForastero\Transliterate;

class ClientController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('client');
  }

  public function lk_client()
  {
    return view('client.lk-client');
  }


  public function my_style()
  {
    return view('client.my-style');
  }

  protected function delete_order(Request $request) // Удаление заказа из моих заказов
  {
    try {
      $order = Order::find($request->input('id'));
      $order->delete();
      $request->session()->flash('success', 'Услуга удалена');
      return;
    } catch (\Exception $exception) {
    }

  }

  protected function add_service_to_client(Request $request)
  {

    $service = service::find($request->input('service_id'));
    $stylist = $service->stylists->find($request->input('stylist_id'));

    if ($stylist !== null && $service !== null) {
      Order::create([
        'client_id' => Auth::user()->client->id,
        'service_id' => $service->id,
        'stylist_id' => $stylist->id,
        'price' => $service->priceForStylist($stylist)
      ]);
      return $request->session()->flash('success', 'Услуга добавлена');;
    }

    return $request->session()->flash('error', 'Ошибка');;
  }

  protected function store(Request $request) // Сохранение настроек клиента
  {
    $data = $request;
    $user = Auth::user();

    $user->update([
      'name' => $data->name,
      'second_name' => $data->second_name,
      'city' => $data->city,
      'cityTranslit' => Transliterate\Transliteration::make($data->city),
    ]);
    if ($request->hasFile('avatar')) {
      $picture = $request->file('avatar');
      $oldPath = $user->avatar;

      if ($user->update(['avatar' => Storage::url(Storage::putFile('public/avatars', $picture))]) !== 0) {
        Storage::delete('public/avatars/' . substr($oldPath, 17));
        $request->session()->flash('success', 'Данные успешно сохранены');
        return redirect('/settings');
      } else {
        $request->session()->flash('Error', 'Ошибка');
        return redirect('/settings');
      }

    }
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }

  protected function ordered(Request $request) //Заказ услгуи у стилиста
  {
    $order = Auth::user()->client->orders->find($request->input('order_id'))->first();
    $order->ordered = 1;
    $order->save();
    return $request->session()->flash('success', 'Услуга заказана');

  }
}

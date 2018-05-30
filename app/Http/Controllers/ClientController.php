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

  // Удаление заказа из моих заказов
  protected function delete_order(Request $request)
  {
    try {
      $order = Order::find($request->input('id'));
      $order->delete();
      $request->session()->flash('success', 'Услуга удалена');
      return;
    } catch (\Exception $exception) {
    }
  }

  // Добавление клиентом услуг
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

      $request->session()->flash('success', 'Услуга добавлена');
      return ;
    }

    return $request->session()->flash('error', 'Ошибка');;
  }

  // Сохранение настроек клиента
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

  //Заказ услгуи у стилиста
  protected function ordered(Request $request) 
  {
    $order = Auth::user()->client->orders->find($request->input('order_id'))->first();
    $order->ordered_by_client = 1;
    $order->save();
    $request->session()->flash('success', 'Услуга заказана');
      return;
  }
}

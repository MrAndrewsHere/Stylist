<?php

namespace App\Http\Controllers;

use App\client;
use App\Order;
use App\OrderFilter;
use App\service;
use App\stylist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Transliterate;


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
            return 'Услуга удалена';
        } catch (\Exception $exception) {
            return "Сорян";
        }
    }

    public function get_stylists_by_category(Request $request)
    {
        $service = service::find($request->input('service_id'));
        $stylists = $service->stylists->where('category_id',$request->input('category_id'));

        return view('blocks.list_stylists', compact('stylists'));
    }

  // Добавление клиентом услуг
  protected function add_service_to_client(Request $request)
  {
    $service = service::find($request->input('service_id'));
    $stylist = $service->stylists->find($request->input('stylist_id'));

    if ($stylist !== null && $service !== null) {
     $order =  Order::create([
        'client_id' => Auth::user()->client->id,
        'service_id' => $service->id,
        'stylist_id' => $stylist->id,
        'price' => $service->priceForStylist($stylist),
         'commission' => '10',
         'payment' => '10.0',
         'confirmed_Date' => $request->input('date'),
      ]);
     $order->commission($order->stylist->commission);
     $order->save();


      return "Услуга добавлена в мои заказы";
    }

    return "Извините, что то пошло не так";
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
    ]);
      $user->cityTranslit = Transliterate::make($user->city);
      $user->save();
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
    try {

      $order = Auth::user()->client->orders->find($request->input('order_id'));
      $order->ordered_by_client = 1;
      $order->save();
      return "Услуга заказана";
    } catch (\Exception $exception) {

      return $exception->getMessage();
    }
  }

   protected function New_orders()
   {

       $ord = Auth::user()->client->orders;
       $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'newOrders'])))->apply();

       return view('client.new_orders',compact('orders'));
   }

   protected function Accepted_orders()

   {
       $ord = Auth::user()->client->orders;
       $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'processing'])))->apply();

       return view('client.processing_orders',compact('orders'));
   }
    protected function Complited_Orders()
   {
       $ord = Auth::user()->client->orders;
       $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'complited'])))->apply();


       return view('client.complited_orders',compact('orders'));
   }

   protected function Canceled_Orders()
   {

       $ord = Auth::user()->client->orders;
       $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'canceled'])))->apply();

       return view('client.canceled_orders',compact('orders'));
   }

  protected function Cancel_Order(Request $request)
  {
    $order_id = $request->input('order_id');
    $order = Order::find($order_id);
    $order->canceled_by_client = 1;
    $order->save();
    return 'Заказ отменён';
  }






}

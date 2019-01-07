<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }

  public function filter_orders(Request $request)
  {
      $orders = (new OrderFilter(Order::get(),$request))->apply();
 return view('admin.orders_table',compact('orders'));;
  }

  public function get_formachka()
  {
      return view('admin.admin_orders_filter');
  }

  public function confirm_payment(Request $request)
  {
      if(! $request->input('order_id')) {return 'Ошибка';}
      if(is_numeric($request->input('order_id'))){
         $order =  Order::find($request->input('order_id'));
         $order->confirmed_pay_by_admin = 1;
         $order->save();
         return "Оплата подтверждена";
      }
      return "Ошибка";
  }

  public function cancel_payment(Request $request)
  {
      if(! $request->input('order_id')) {return 'Ошибка';}
      if(is_numeric($request->input('order_id'))){
          $order =  Order::find($request->input('order_id'));
          $order->confirmed_pay_by_admin = 0;
          $order->save();
          return "Оплата отменена";
      }
      return "Ошибка";
  }

  public function delete_order_by_admin(Request $request)
  {
      if(! $request->input('order_id')) {return 'Ошибка';}
      if(is_numeric($request->input('order_id'))){
          $order =  Order::find($request->input('order_id'))->delete();

          return "Заказ удалён";
      }
      return "Ошибка";
  }

}

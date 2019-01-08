<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $fillable = ['client_id', 'service_id', 'stylist_id', 'price', 'commission', 'payment','confirmed_Date'];
  public $timestamps = false;


  public function client()
  {
    return $this->belongsTo('App\client');
  }


  public function commission($value)
  {
      if(is_int($value) ) {
          $this->commission = $value;
          $this->payment = ($this->price*$value/100);
          return $this->save();
      }
      return false;
  }

  public function stylist()
  {
    return $this->belongsTo('App\stylist');
  }

  public function service()
  {
    return $this->belongsTo('App\service');
  }



  protected function Accept_Order(Request $request)
  {
    try {
      $order = Order::find($request->input('order_id'));
      $order->ordered_by_client = 0;
      $order->confirmed_by_stylist = 1;
      $order->save();
      return 'Заказ принят';
    } catch (\Exception $exception) {
      return $exception->getMessage();
    }

  }

  protected function Cancel_Order(Request $request)
  {
    try {
      $order_id = $request->input('order_id');
      $order = Order::find($order_id);
      $order->ordered_by_client = 0;
      $order->confirmed_by_stylist = 0;
      $order->complited = 0;
      $order->canceled_by_stylist = 1;
      $order->save();
      return 'Заказ отменён';
    } catch (\Exception $exception) {
      return $exception->getMessage();
    }
  }

  protected function Complite_Order(Request $request)
  {
    try {
      $order = Order::find($request->input('order_id'));
      $order->confirmed_by_stylist = 0;
      $order->complited = 1;
      $order->save();
      return 'Заказ выполнен';
    } catch (\Exception $exception) {
      return $exception->getMessage();
    }

  }

}






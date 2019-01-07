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
  
}

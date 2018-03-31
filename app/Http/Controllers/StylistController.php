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
}

<?php

namespace App\Http\Controllers;

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
    return view('lk-client');
  }

  public function my_style()
  {
    return view('my-style');
  }
}

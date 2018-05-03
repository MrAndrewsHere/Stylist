<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 08.12.2017
 * Time: 12:58
 */

namespace App\Http\Controllers;


class AccountContrloller extends Controller
{
  public function _construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('home');
  }
}
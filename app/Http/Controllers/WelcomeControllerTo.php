<?php

namespace App\Http\Controllers;

use App\Stylist;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WelcomeControllerTo extends Controller

{
  public function __construct()
  {

  }


  public function stylist_profile()
  {
    return view('stylist-card');
  }

  public function index()
  {
    return view('welcome');
  }

  public function test(Request $request)
  {


    return view('test1');

  }

  public function posttest(Request $request)
  {
    $result = $request->input('IsStylist');


    return dump($result);
  }

  public function contacts()
  {
    return view('contacts');
  }

  public function answers()
  {
    return view('answers');
  }

  public function services()
  {
    return view('services');
  }

  public function stylists()
  {

    $stylists = Stylist::join('users', 'users.id', '=', 'stylists.user_id')->get();
    return view('stylists', compact('stylists'));
  }
}

<?php

namespace App\Http\Controllers;

use App\Service;
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


  public function stylist_profile(Request $request)
  {
    $stylist = Stylist::findorfail($request->input('id'));
    return view('stylist-card',compact('stylist'));
  }

  public function index()
  {
    return view('welcome');
  }

  public function test(Request $request)
  {


    return view('stylist-card');

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

//    $stylists = Stylist::join('users', 'users.id', '=', 'stylists.user_id')->get();
    $stylists = Stylist::all();
    return view('stylists', compact('stylists'));
  }
}

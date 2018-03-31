<?php

namespace App\Http\Controllers;

use App\Stylist;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('home');
  }

  public function test()
  {
    return view('test1');
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


  public function portfolio()
  {
    return view('portfolio');
  }


  public function my_orders()
  {

//        $Neworders = Order::where('status','0')->orderby('updated_at','asc')->paginate(5);
//        $Savedorders = Order::where('status','1')->orderby('updated_at','asc')->paginate(5);

    return view('my-orders');
  }

  public function social()
  {
    return view('auth.social');
  }

  public function settings()
  {

    $currentUser = Auth::user();

    return view('settings', compact('currentUser'));


  }

  protected function store(Request $request)
  {
    $data = $request;

    Auth::user()->update(['name' => $data->name, 'second_name' => $data->second_name,]);
    Auth::user()->stylist->update(['about' => $data->about, 'education' => $data->education]);
    $request->session()->flash('success', 'Данные успешно сохранены');
    return redirect('/settings');

  }
}

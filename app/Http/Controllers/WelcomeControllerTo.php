<?php

namespace App\Http\Controllers;

use App\service;
use App\servicecategory;
use App\stylist;
use App\stylistcategory;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use function Symfony\Component\VarDumper\Dumper\esc;

class WelcomeControllerTo extends Controller

{
  public function __construct()
  {

  }


  public function stylist_profile($id)
  {
    $stylist = null;
    if (isset($id)) {
      $stylist = stylist::findorfail($id);
    }
    return view('stylist-card', compact('stylist'));
  }

  public function index()
  {
    return view('welcome');
  }

  public function test(Request $request)
  {
    return view('stylist-card');
  }

  public function service_page($id)
  {
    $service = null;
    try {
      $service = service::find($id);
      $stylists = $service->stylists;
    } catch (\ErrorException $exception) {

    }
    return view('service-page', compact('service'), compact('stylists'));
  }

  public function take(Request $request)
  {
    return service::where('category_id', $request->input('id'));
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

  public function services($categoryName)
  {
    if (isset($categoryName)) {
      if ($categoryName == 'all') {
        $Categoryservices = service::all();
        return view('services', compact('Categoryservices'));
      }
      $services = null;
      $category = servicecategory::wherename($categoryName);
      if (isset($category->first()->id))
        $Categoryservices = $category->first()->service;
      return view('services', compact('Categoryservices'));
    }

    $Categoryservices = service::all();
    return view('services', compact('Categoryservices'));
  }

  public function sendmail(Request $request)
  {
    return $answer = 'Ваше сообщение отправлено';
  }

  public function stylists()
  {
    $stylists = stylist::whereConfirmed(1)->get();
    $stylistcategories = stylistcategory::all();
    $cities = User::select('city')->distinct()->get();
    return view('stylists', compact('stylists'), compact('stylistcategories'));
  }
}

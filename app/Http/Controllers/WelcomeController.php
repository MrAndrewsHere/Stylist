<?php

namespace App\Http\Controllers;

use App\service;
use App\servicecategory;
use App\stylist;
use App\stylistcategory;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\VarDumper\Dumper\esc;
use ElForastero\Transliterate;

class WelcomeController extends Controller

{
  public function __construct()
  {

  }


  public function stylist_profile($id)
  {
    $stylist = null;
    if (isset($id)) {
      $stylist = stylist::findorfail($id);
      $portfolios = $stylist->portfolios;
    }
    return view('stylist-card', compact('stylist'),compact('portfolios'));
  }

  public function index()
  {
    return view('welcome');
  }

  public function register_callback(Request $request)

  {

      $data = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
      $user = json_decode($data, TRUE);
      return dump($user);
  }
  public function test(Request $request)
  {

   return view ('test1');
  }

  public function service_page($id)
  {
    $service = service::findorfail($id);
    $categorystylists = stylistcategory::all();
    return view('service-page', compact('service'), compact('categorystylists'));

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

  public function services()
  {
    $AllServices = service::all();
      return view('services', compact('AllServices'));
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
    if (isset($categoryName))
    {
    $Categoryservices = service::all();
    return view('services', compact('Categoryservices'));
    }
  }

  public function sendmail(Request $request)
  {
    return $answer = 'Ваше сообщение отправлено';
  }

  public function stylists()
  {
    $stylists = stylist::whereConfirmed(1)->get();
    $stylistcategories = stylistcategory::all();
    $cities = collect([]);
    foreach ($stylists as $stylist) {
      
      $cities->push(
        ['RU' =>  $city = $stylist->user->city, 'Translit' => $stylist->user->cityTranslit]
      );
    }
   $cities = $cities->unique();

    $cities = $cities->filter(function ($value) {
          return $value['Translit'] !== null;
      });


      $cities->values()->all();
    return view('stylists', compact('stylists'), compact('stylistcategories'))->with('cities', $cities);
  }
}

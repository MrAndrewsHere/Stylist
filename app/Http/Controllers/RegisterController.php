<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Stylist;
use App\User;
use App\role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rules\In;

class RegisterController extends Controller
{
  use RegistersUsers;

  protected $redirectTo = '/';

  public function __construct()
  {
    $this->middleware('guest');
  }

  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => 'same:password',
      'IsStylist' => 'exists:roles,name',


    ]);
  }

  protected function create(array $data)
  {

    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
      'avatar'=> '/img/user-pic.png',
      'role_id' => role::where('name', '=', $data['IsStylist'])->first()->id,
    ]);
    if ($data['IsStylist'] == 'stylist') {
      \App\stylist::create([
        'user_id' => $user->id,
      ]);
    } else {
      \App\client::create([
        'user_id' => $user->id,
      ]);
    }

    return $user;
  }
}

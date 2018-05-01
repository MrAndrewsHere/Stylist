<?php

namespace App\Http\Controllers\Auth;

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
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = '/';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
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

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array $data
   * @return User
   */
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

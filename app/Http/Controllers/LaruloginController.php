<?php

namespace App\Http\Controllers;

use App\ulogin;
use App\User;
use App\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rules\In;

class LaruloginController extends Controller
{
    public function getUlogin(Request $request)
    { $token =  $request->input('token');
        $data = file_get_contents('http://ulogin.ru/token.php?token=' . $token . '&host=' . $_SERVER['HTTP_HOST']);
        $_user = json_decode($data, TRUE);
        $validate = Validator::make([], []);
        if(isset($_user['error']))
        {
            $validate->errors()->add('error', 'Ошибка');
            return back();
        }
        // Check exist user
        $check = ulogin::where('identity', '=', $_user['identity'])->first();
        if($check)
        {
           return 'UserIsAlreadyRegistered';
        }
        $rules = array(
            'network'   => 'required|max:255',
            'identity'  => 'required|max:255|unique:ulogin',
            'email'     => 'required|unique:ulogin|unique:users',
        );
        $messages = array(
            'email.unique' => 'Пользователь уже зарегистрирован',
        );
        $validate = Validator::make($_user, $rules, $messages);
        if($validate->passes())
        {
            return 'NeedCategory';
        }
    }
    public function postUlogin(Request $request)
    {
        $data = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
        $_user = json_decode($data, TRUE);
        //$user['network'] - соц. сеть, через которую авторизовался пользователь
        //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
        //$user['first_name'] - имя пользователя
        //$user['last_name'] - фамилия пользователя
        $validate = Validator::make([], []);
        if(isset($_user['error']))
        {
            $validate->errors()->add('error', 'Ошибка');
            return $validate->error();
        }
        // Check exist user
        $check = ulogin::where('identity', '=', $_user['identity'])->first();
        if($check)
        {
            Auth::loginUsingId($check->user_id, true);
            return Redirect::to('/');

        }
        $rules = array(
            'network'   => 'required|max:255',
            'identity'  => 'required|max:255|unique:ulogin',
            'email'     => 'required|unique:ulogin|unique:users',
        );
        $messages = array(
            'email.unique' => 'Пользователь уже зарегистрирован',
        );
        $validate = Validator::make($_user, $rules, $messages);
        if($validate->passes())
        {
            $password = bcrypt(str_random(8));
            $user = User::create([
                'name'    => $_user['first_name'],
                'second_name'     => $_user['last_name'],
                'email'         => $_user['email'],
                'avatar'=>  $_user['photo_big'],
                'role_id' => role::where('name', '=', $request->input('IsStylist'))->first()->id,
                'password'      => $password,
            ]);
            if ($request->input('IsStylist') == 'stylist') {
                \App\stylist::create([
                    'user_id' => $user->id,
                ]);
            } else {
                \App\client::create([
                    'user_id' => $user->id,
                ]);
            }

            $ulogin = new ulogin();
            $ulogin->user_id        = $user->id;
            $ulogin->network        = $_user['network'];
            $ulogin->identity       = $_user['identity'];
            $ulogin->email          = $_user['email'];
            $ulogin->first_name     = $_user['first_name'];
            $ulogin->last_name      = $_user['last_name'];
            $ulogin->photo          = $_user['photo'];
            $ulogin->photo_big      = $_user['photo_big'];
            $ulogin->verified_email = $_user['verified_email'];
            $ulogin->profile        = $_user['profile'];
            $ulogin->access_token   = isset($_user['access_token']) ? $_user['access_token'] : '';
            $ulogin->country        = isset($_user['country']) ? $_user['country'] : '';
            $ulogin->city           = isset($_user['city']) ? $_user['city'] : '';
            $ulogin->save();
            $authClassic = Auth::loginUsingId($user->id);
            return Redirect::to('/');
        }
        else
        {
            return $validate->errors();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    private $adminmail = 'Stilisty.com@yandex.ru';

    public static function send($user,$order)
    {
        Mail::send('mail',['user' => $user, 'order' => $order], function ($message) {
            $message->to('andrews.mr@yandex.ru')->subject('Стилист принял заказ');
            $message->from('stilisty.com@yandex.ru', 'Stilisty@Info');
        });
    }
    public static function registration_send($user)
    {
        Mail::send('reg_mail',['user' => $user], function ($message) use ($user) {
            $message->to($user->email, $user->name)->subject('Регистрация на www.stilisty.com');
            $message->from('stilisty.com@yandex.ru', 'Stilisty@Info');
        });
    }

    public function reg()
    {
//       return dump( $this->registration_send(User::find(1)));
        Mail::send('text',['name' => 'user'], function ($message)  {
            $message->to('andrews.mr@yandex.ru')->subject('Регистрация на www.stilisty.com');
            $message->from('stilisty.com@yandex.ru', 'Stilisty@Info');
        });
    }



}

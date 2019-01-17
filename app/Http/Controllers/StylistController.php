<?php

namespace App\Http\Controllers;

use App\file;
use App\OrderFilter;
use App\service;
use App\stylist;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class StylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('stylist');
    }

    public function AddService_To_Stylist(Request $request)
    {
        $stylist = Auth::user()->stylist;
        $service_id = $request->input('service_id');
        if($stylist->services->contains('id',$service_id))
        { $stylist->services()->detach(service::find($service_id));
        return $msg = "Deleted";
        }
        $stylist->services()->save(service::find($service_id));
        return $msg = "Added";


    }

    public function lk_stylist()
    {

        try {
            $files = Auth::user()->stylist->files;
            $Services = service::all();

        } catch (\ErrorException $error) {

        }

        return view('stylist.lk-stylist', compact('files'),compact('Services'));
    }



    public function diplom_delete(Request $request)
    {
        if ($request->has('diplom')) {
            $id = $request->input('diplom');
            $user = Auth::user();
            $file = $user->stylist->files->find($id);
            if ($file !== null) {
                Storage::delete('public/files/' . substr($file->path, 15));
                $result = $file->delete();
                return $result = 'true';
            }
            $result = 'Ошибка';
            return $result;
        }
        return $result = 'false';
    }

    public function Send_Confirm()
    {
        try {
            $stylist = Auth::user()->stylist;
            $stylist->send_confirm();
            return "Заявка отправлена";
        }
        catch (\Exception $exception)
        {
            return "Временная ошибка " .
                "Попробуйте позже";


        }

    }

    protected function store(Request $request)
    {
        $data = $request;
        $user = Auth::user();

        $user->update([
            'name' => $data->name,
            'second_name' => $data->second_name,
            'city' => $data->city,
        ]);
        $user->cityTranslit = Transliterate::make($user->city);
        $user->save();

        $user->stylist->update([
            'education' => $data->education,
            'about' => $data->about,

        ]);
        $stylist = $user->stylist;


        if ($request->hasFile('avatar')) {
            $picture = $request->file('avatar');

            $oldPath = $user->avatar;

            if ($user->update(['avatar' => Storage::url(Storage::putFile('public/avatars', $picture))]) !== 0) {
                Storage::delete('public/avatars/' . substr($oldPath, 17));
                $request->session()->flash('success', 'Данные успешно сохранены');
                return redirect('/settings');
            } else
                $request->session()->flash('Error', 'Ошибка');

        }
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                try {
                    $user->stylist->files()->create([
                        'path' => Storage::url(Storage::putFile('public/files', $file)),
                        'type' => 'achievements',
                    ]);
                } catch (\Exception $e) {
                }

            }
            return redirect('/settings');
        }

        $request->session()->flash('error', 'Упс, ошибка!');
        return redirect('/settings');
    }

    public function delete_portfolio(Request $request)
    {
        $stylist = Auth::user()->stylist->portfolios->find($request->input('id'))->delete();
        return "true";


    }

    protected function New_orders()
    {
        try {

            $ord = Auth::user()->stylist->orders;
            $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'newOrders'])))->apply();

            return view('stylist.new_orders', compact('orders'));
        } catch (\Exception $exception) {

            return $exception->getMessage();

        }
    }

    protected function Processing_orders()
    {
        try {
            $ord = Auth::user()->stylist->orders;
            $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'processing'])))->apply();

            return view('stylist.processing_orders', compact('orders'));
        } catch (\Exception $exception) {

            return $exception->getMessage();

        }
    }


    protected function Complited_Orders()
    {
        try {
            $ord = Auth::user()->stylist->orders;
            $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'complited'])))->apply();

            return view('stylist.complited_orders', compact('orders'));
        } catch (\Exception $exception) {

            return $exception->getMessage();

        }
    }

    protected function Canceled_Orders()
    {
        try {
            $ord = Auth::user()->stylist->orders;
            $orders = (new OrderFilter($ord, Request::create(null,null,['status'=>'canceled'])))->apply();

            return view('stylist.canceled_orders', compact('orders'));
        } catch (\Exception $exception) {

            return $exception->getMessage();

        }

    }

    protected function Accept_Order(Request $request)
    {
        try {
            $order = Order::find($request->input('order_id'));
            $order->confirmed_by_stylist = 1;
            $order->save();

            MailController::send(Auth::user(),$order);
            return 'Заказ принят';
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }

    protected function Cancel_Order(Request $request)
    {
        try {
            $order = Order::find($request->input('order_id'));
            $order->canceled_by_stylist = 1;
            $order->save();
            return 'Заказ отменён';
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    protected function Complite_Order(Request $request)
    {
        try {
            $order = Order::find($request->input('order_id'));
            $order->complited = 1;
            $order->save();
            return 'Заказ выполнен';
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }

    public function Pay_Order(Request $request)
    {
        try{
            $order = Order::find($request->input('order_id'));
            $order->paid = 1;
            $order->save();
            return 'Запрос отправлен';
        }
        catch (\Exception $exception)
        {
            return 'Серверная ошибка';
        }
    }


}

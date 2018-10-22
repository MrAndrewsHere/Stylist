<?php

namespace App\Http\Controllers;

use App\service;
use App\stylist;
use App\stylistcategory;
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

    public function portfolio()
    {
        return view('portfolio');
    }

    public function admin()
    {
        $stylists = Stylist::where('Confirmed','0')->where('Send_Confirm', '1')->get();
        return view('admin', compact('stylists'));
    }

    public function admin_stylists()
    {
         $stylists = Stylist::where('Confirmed','1')->get();
        $stylistcategories = stylistcategory::all();
        return view('admin_stylists', compact('stylists'),compact('stylistcategories'));
    }

    public function admin_orders(Request $request)
    {
        $stylist = Stylist::find($request->input('id'));

        if ($stylist !== null) {
            $Allorders = $stylist->orders;
            return view('admin.stylist_orders.stylist_orders', compact('Allorders'));
        }
        return $error = 'Ошибка, перезагрузите страницу';


    }

    public function admin_find_orders()
    {
        return view('admin_orders');


    }

    public function show_stylist_profile(Request $request)
    {
        $stylist = Stylist::find($request->input('id'));
        $categories = stylistcategory::all()->sortByDesc('id');
        if ($stylist !== null) {
            return view('blocks.stylist_block', compact('stylist'), compact('categories'));
        }
        return $error = 'Ошибка, перезагрузите страницу';


    }

    public function accept_stylist(Request $request)
    {
        $stylist = Stylist::find($request->input('id'));
        if ($stylist !== null && $stylist->Confirmed == 1)
        {
            if ($request->input('category') == '0')
            {
                $stylist->Confirmed = 0;
                $stylist->Send_Confirm = 0;
                $stylist->save();
                return 'Стилист отклонён';
            }
            else
            {
                $stylist->update([
                    'category_id' => $request->input('category'),
                ]);
                $stylist->save();
                return "Категория изменена";
            }
        }
        if ($stylist !== null && $request->input('category') == '0') {
            $stylist->Send_Confirm = 0;
            $stylist->save();
             return "Отклонено";

        } else {
           $stylist->Confirmed = 1;
           $stylist->save();
            $stylist->update([
                'Confirmed' => '1',
                'category_id' => $request->input('category'),
            ]);
            return "Категория выставлена";
        }
        return "Такого стилиста не существует или неправильно назначена категория";
    }


    public function my_orders()
    {
//        $Neworders = Order::where('status','0')->orderby('updated_at','asc')->paginate(5);
//        $Savedorders = Order::where('status','1')->orderby('updated_at','asc')->paginate(5);

        if (Auth::user()->role_id == '1') {
            $orders = Auth::user()->client->orders->where('confirmed_by_stylist', '=', '0');
            $orders = $orders->where('canceled_by_stylist', '0');
            $orders = $orders->where('complited', '0');
            return view('my-orders', compact('orders'));
        }
        if (Auth::user()->role_id == '2')
            try {
                $orders = Auth::user()->stylist->orders->where('ordered_by_client', '1');
                return view('my-orders', compact('orders'));
            } catch (\ErrorException $error) {

            }

    }

    public function settings()
    {
        $currentUser = Auth::user();
        return view('settings', compact('currentUser'));
    }


}

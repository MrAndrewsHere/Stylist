<?php

namespace App\Http\Controllers;

use App\OrderFilter;
use App\service;
use App\stylist;
use App\stylistcategory;
use App\User;
use App\Order;
use http\Client\Response;
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
 public function admin_stylist_services(Request $request)
 {
     $stylist = Stylist::find($request->input('id'));

     if ($stylist !== null) {
         $services = $stylist->services;
         return view('admin.stylist_services', compact('services'));
     }
     else
           return $error = 'Ошибка, перезагрузите страницу';


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


            if(is_numeric($request->input('commission'))){
                $stylist->update([
                    'commission' => $request->input('commission'),
                ]);
                $stylist->save();

            }
            if(is_numeric($request->input('category'))){
                $stylist->update([
                    'category_id' => $request->input('category'),

                ]);
                $stylist->commission = $stylist->category->default_commission;
                $stylist->save();

            }
            if ($request->input('category') == '0')
            {
                $stylist->Confirmed = 0;
                $stylist->Send_Confirm = 0;
                $stylist->save();

            }
            else
            {
                $stylist->update([
                    'category_id' => $request->input('category'),
                ]);
                $stylist->save();

            }
            return "Saved";
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

        $role = Auth::user()->role->name;
        try {
            $orders = (new OrderFilter(Auth::user()->$role->orders, Request::create(null,null,['status' =>'newOrders'])))->apply();
            return view('my-orders', compact('orders'));
        } catch (\ErrorException $error) {
            return redirect('/');

        }

    }

    public function settings()
    {
        $currentUser = Auth::user();
        return view('settings', compact('currentUser'));
    }


}

<?php

namespace App\Http\Controllers;

use App\User;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
    public function stylists()
    {
        return view('stylists');
    }




}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home');


});

Auth::routes();

Route::resource('posts', 'PostController');
Route::get('/home', 'HomeController@index');
Route::get('/lk_stylist', 'StylistController@lk_stylist');
Route::get('/lk_client', 'ClientController@lk_client');
Route::get('/my_style', 'ClientController@my_style');
Route::get('/my_orders', 'HomeController@my_orders');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/test', 'WelcomeControllerTo@test');
Route::get('/settings', 'HomeController@settings');
Route::get('/social', 'HomeController@social');
Route::get('/contacts', 'WelcomeControllerTo@contacts');
Route::get('/answers', 'WelcomeControllerTo@answers');
Route::get('/stylists', 'WelcomeControllerTo@stylists');
Route::get('/services', 'WelcomeControllerTo@services');
Route::post('/save_portfolio', 'HomeController@save_portfolio');
Route::get('/stylist_profile/{id}', 'WelcomeControllerTo@stylist_profile');
Route::get('/Reg', 'HomeController@reg');
Route::post('/posttest', 'WelcomeControllerTo@posttest');

Route::resource('portfolio', 'PortfolioController');

Route::post('save_info', 'HomeController@store');


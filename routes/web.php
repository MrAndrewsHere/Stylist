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

Route::get('/register','RegisterController@showform');
Route::post('/register','RegisterController@register');

Route::get('/home', 'HomeController@index');
Route::get('/lk_stylist', 'StylistController@lk_stylist');
Route::get('/lk_client', 'ClientController@lk_client');
Route::get('/my_style', 'ClientController@my_style');
Route::get('/my_orders', 'HomeController@my_orders');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/test', 'WelcomeController@test');
Route::get('/settings', 'HomeController@settings');
Route::get('/contacts', 'WelcomeController@contacts');
Route::get('/answers', 'WelcomeController@answers');
Route::get('/admin', 'HomeController@admin');
Route::get('/stylists', 'WelcomeController@stylists');
Route::get('/services/{category}', 'WelcomeController@services');
Route::get('/service-page/{id}', 'WelcomeController@service_page');
Route::post('/save_portfolio', 'HomeController@save_portfolio');
Route::get('/stylist_profile/{id}', 'WelcomeController@stylist_profile');
Route::get('/Reg', 'HomeController@reg');
Route::post('/posttest', 'WelcomeController@posttest');
Route::post('/add_service_to_client','ClientController@add_service_to_client');
Route::post('/sendmail', 'WelcomeController@sendmail'); // роут для отправки формы обратной связи
Route::post('/take','WelcomeController@take');
Route::resource('portfolio', 'PortfolioController');
Route::post('/ordered','ClientController@ordered');
Route::post('delete_order','ClientController@delete_order');
Route::post('/save_info', 'StylistController@store');
Route::post('/saveinfo', 'ClientController@store');
Route::post('/diplom_delete','StylistController@diplom_delete');
Route::post('/show_stylist_profile','HomeController@show_stylist_profile');
Route::post('/accept_stylist','HomeController@accept_stylist');
Route::post('/delete_portfolio','StylistController@delete_portfolio');


Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


Route::get('/stylist_new_orders','StylistController@New_orders');
Route::get('/stylist_Processing_orders','StylistController@Processing_orders');
Route::get('/stylist_Complited_Orders','StylistController@Complited_Orders');
Route::get('/stylist_Canceled_Orders','StylistController@Canceled_Orders');

Route::post('/Accept_Order','StylistController@Accept_Order');
Route::post('/stylist_Cancel_Order','StylistController@Cancel_Order');
Route::post('/Complite_Order','StylistController@Complite_Order');

Route::get('client_New_orders','ClientController@New_orders');
Route::get('client_Accepted_orders','ClientController@Accepted_orders');
Route::get('client_Complited_Orders','ClientController@Complited_Orders');
Route::get('client_Canceled_Orders','ClientController@Canceled_Orders');
Route::post('/client_Cancel_Order','ClientController@Cancel_Order');


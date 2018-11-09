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

Auth::routes(); //Группа роутов для стандартной авторизации



// WelcomeController --> Guard: 'Guest'

Route::get('/test', 'WelcomeController@test'); // Для тестов
Route::get('/contacts', 'WelcomeController@contacts'); // Старницы контактов
Route::get('/answers', 'WelcomeController@answers'); // Страницы ответы
Route::get('/stylists', 'WelcomeController@stylists'); // Страницы наши стилисты
Route::get('/services', 'WelcomeController@services'); // Страницы наши услуги
Route::get('/service-page/{id}', 'WelcomeController@service_page'); // Страница услуги
Route::get('/stylist_profile/{id}', 'WelcomeController@stylist_profile'); // Страница профиля стилиста
Route::post('/posttest', 'WelcomeController@posttest'); // Тоже тест {удалю}
Route::post('/sendmail', 'WelcomeController@sendmail'); // роут для отправки формы обратной связи (перенести в mailcontroller)
Route::post('/take','WelcomeController@take'); // По id категории возвращает услуги в этой категории (незнаю зачем это, потом выясню)

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');




// HomeController --> Guard: 'auth'

Route::get('/home', 'HomeController@index');
Route::get('/settings', 'HomeController@settings');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/my_orders', 'HomeController@my_orders');
Route::get('/admin', 'HomeController@admin'); // Новые завяки у админа ( перенести в AdminController )
Route::get('/admin_stylists', 'HomeController@admin_stylists'); // Просмотр админом всех стилистов на сайте ( перенести в AdminController )
Route::get('/admin_find_orders', 'HomeController@admin_find_orders'); // Просмотр заказов на сайте ( перенести в AdminController )
Route::post('/admin_orders', 'HomeController@admin_orders'); // Ajax подгружает заказы выбранного стилиста на /admin_stylists
Route::post('/save_portfolio', 'HomeController@save_portfolio'); // Сохраняет портфолио стилист ( перенести StylistController)
Route::post('/show_stylist_profile','HomeController@show_stylist_profile'); // Ajax
Route::post('/accept_stylist','HomeController@accept_stylist'); // Ajax Назначение категории или отклонение стилиста админом



// StylistController --> Guard: 'auth, stylist'

Route::get('/lk_stylist', 'StylistController@lk_stylist');
Route::post('/save_info', 'StylistController@store'); // Сохранение настроек стилиста
//Ajax
Route::post('/diplom_delete','StylistController@diplom_delete');
Route::post('/delete_portfolio','StylistController@delete_portfolio');
Route::get('/stylist_new_orders','StylistController@New_orders');
Route::get('/stylist_Processing_orders','StylistController@Processing_orders');
Route::get('/stylist_Complited_Orders','StylistController@Complited_Orders');
Route::get('/stylist_Canceled_Orders','StylistController@Canceled_Orders');
Route::post('/Accept_Order','StylistController@Accept_Order');
Route::post('/stylist_Cancel_Order','StylistController@Cancel_Order');
Route::post('/Complite_Order','StylistController@Complite_Order');



// ClientController --> Guard: 'auth, сlient'

Route::get('/lk_client', 'ClientController@lk_client');
Route::get('/my_style', 'ClientController@my_style');
Route::post('/saveinfo', 'ClientController@store'); // Сохранение настроек клиента
// Ajax
Route::post('/ordered','ClientController@ordered');
Route::post('delete_order','ClientController@delete_order');
Route::post('/add_service_to_client','ClientController@add_service_to_client');
Route::get('client_New_orders','ClientController@New_orders');
Route::get('client_Accepted_orders','ClientController@Accepted_orders');
Route::get('client_Complited_Orders','ClientController@Complited_Orders');
Route::get('client_Canceled_Orders','ClientController@Canceled_Orders');
Route::post('/client_Cancel_Order','ClientController@Cancel_Order');
Route::post('/get_stylists_by_category','ClientController@get_stylists_by_category');


// LaruloginController --> Guard: Авторизация через соцсети

Route::get('/getUlogin', 'LaruloginController@getUlogin'); // Ajax для проверки регистрации, нужнен для запроса категории
Route::post('/postUlogin', 'LaruloginController@postUlogin'); // Регистрирует и авторизует через соц сети



// PortfolioController --> Guard:  'auth, stylist'
//
Route::resource('portfolio', 'PortfolioController'); // Группа роутов для CRUD операций по портфолио



// MailController --> Guard: 'Guest' Отправка почты
Route::get('/reg','MailController@reg'); // Для тестирования почты





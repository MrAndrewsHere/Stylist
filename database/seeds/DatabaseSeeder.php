<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   * public function run()
   *
   */
  public function run()
  {

//    DB::table('service_servicecategory')->truncate();
//    DB::table('service_stylist')->truncate();
//    DB::table('client_service')->truncate();
//    DB::table('services')->truncate();
//    DB::table('portfolios')->truncate();
//    DB::table('stylists')->truncate();
//    DB::table('clients')->truncate();
//    DB::table('users')->truncate();
//    DB::table('roles')->truncate();
    DB::table('roles')->insert(
      [
        'id' => '1',
        'name' => 'client',
      ]
    );
    DB::table('roles')->insert(
      [
        'id' => '2',
        'name' => 'stylist',
      ]
    );

    DB::table('roles')->insert(
      ['id' => '3',
        'name' => 'admin',
      ]
    );
    DB::table('users')->insert([
      'id' => '1',
      'name' => 'Андрей',
      'email' => 'andrews.mr@yandex.ru',
      'password' => bcrypt('123456789'),
      'second_name' => 'Долженко',
      'city' => 'Дубна',
      'phone_number' => '89259042411',
      'role_id' => '3',
      'avatar' => 'img/no_avatar.jpg',


    ]);
    DB::table('users')->insert(
      ['id' => '2',
        'name' => 'Михаил',
        'email' => 'Misha@yandex.ru',
        'password' => bcrypt('123456789'),
        'second_name' => 'Рябушкин',
        'city' => 'Дубна',
        'phone_number' => '89264587655',
        'role_id' => '1',
        'avatar' => 'img/no_avatar.jpg',
      ]);
    App\Client::create(['id'=>'1','user_id'=>'2']);
    DB::table('users')->insert(
      ['id' => '3',
        'name' => 'Виктория',
        'email' => 'Vika@yandex.ru',
        'password' => bcrypt('123456789'),
        'second_name' => 'Рябушкина',
        'city' => 'Дубна',
        'phone_number' => '89996633221',
        'role_id' => '2',
        'avatar' => 'img/stylist1.png',

      ]);
    DB::table('users')->insert(
      ['id' => '4',
        'name' => 'Екатерина',
        'email' => 'Kate@yandex.ru',
        'password' => bcrypt('123456789'),
        'second_name' => 'Владимировна',
        'city' => 'Дубна',
        'phone_number' => '87776565851',
        'role_id' => '2',
        'avatar' => 'img/stylist3.jpg',
      ]);
    DB::table('users')->insert(
      ['id' => '5',
        'name' => 'Алиса',
        'email' => 'Alice@yandex.ru',
        'password' => bcrypt('123456789'),
        'second_name' => 'Селезнёва',
        'city' => 'Дубна',
        'phone_number' => '89996644221',
        'role_id' => '2',
        'avatar' => 'img/stylist2.png',
      ]
    );


    $this->call(StCategorySeeder::class);
    $this->call(StylistDaatabaseSeeder::class);
    $this->call(ServiceSeeder::class);
    $this->call(stylist_service::class);


  }


//	public function run()
//	{

//	factory(App\User::class,3)->create([]);
//	}
}


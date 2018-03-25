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
//			DB::table('users')->insert([
//				'id' => '1',
//				'name' => 'Андрей',
//				'email' => 'andrews.mr@yandex.ru',
//				'password' => bcrypt('123456789'),
//				'second_name' => 'Долженко',
//				'city'=>'Дубна',
//				'phone_number'=>'89259042411',
//				'role' => 'admin'
//
//			]);
//			DB::table('users')->insert(
//			['id' => '2',
//				'name' => 'Михаил',
//				'email' => 'Misha@yandex.ru',
//				'password' => bcrypt('123456789'),
//				'second_name' => 'Рябушкин',
//				'city'=>'Дубна',
//				'phone_number'=>'89259042411',
//				'role' => 'stylist'
//			]);
//			DB::table('users')->insert(
//				['id' => '3',
//				'name' => 'Виктория',
//				'email' => 'Vika@yandex.ru',
//				'password' => bcrypt('123456789'),
//				'second_name' => 'Рябушкина',
//				'city'=>'Дубна',
//				'phone_number'=>'8999663322',
//				'role' => 'client'
//					]);
//			DB::table('users')->insert(
//				['id' => '4',
//					'name' => 'Екатерина',
//					'email' => 'Kate@yandex.ru',
//					'password' => bcrypt('123456789'),
//					'second_name' => 'Владимировна',
//					'city'=>'Дубна',
//					'phone_number'=>'8777656585',
//					'role' => 'stylist'
//				]);
//			DB::table('users')->insert(
//				['id' => '5',
//					'name' => 'Алиса',
//					'email' => 'Alice@yandex.ru',
//					'password' => bcrypt('123456789'),
//					'second_name' => 'Ульянова',
//					'city'=>'Дубна',
//					'phone_number'=>'8999664422',
//					'role' => 'client'
//				]
//			  );

			$this->call(StCategorySeeder::class);
			$this->call(StylistDaatabaseSeeder::class);



    }


//	public function run()
//	{

//	factory(App\User::class,3)->create([]);
//	}
}


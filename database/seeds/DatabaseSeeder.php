<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
				'name' => 'Андрей',
				'email' => 'andrews.mr@yandex.ru',
				'password' => bcrypt('23210622'),
				'second_name' => 'Долженко',
				'city'=>'Дубна',
				'phone_number'=>'Дубна',
				'role' => 'admin'

			],[
				'name' => 'Михаил',
				'email' => 'Misha@yandex.ru',
				'password' => bcrypt('123456789'),
				'second_name' => 'Рябушкин',
				'city'=>'Дубна',
				'phone_number'=>'Дубна',
				'role' => 'client'
			]);


    }
}

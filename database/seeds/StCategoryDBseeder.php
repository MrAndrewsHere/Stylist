<?php

use Illuminate\Database\Seeder;

class StCategoryDBseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		DB::table('stylistcategories')->insert(
			[ 'id' =>'1',
				'describe' => 'Элитный стилист',
				'name' => 'VIP'
			]);
		DB::table('stylistcategories')->insert(
			['id' =>'2',
				'describe' => 'Такой себе стилист',
				'name' => 'VIP/4'
			]);
		DB::table('stylistcategories')->insert(
			[ 'id' =>'3',
				'describe' => 'Средний стилист',
				'name' => 'VIP/2'
			]
		  );
	}
}

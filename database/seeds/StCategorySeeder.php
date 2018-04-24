<?php

use Illuminate\Database\Seeder;

class StCategorySeeder extends Seeder
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
          'name' => 'VIP стилист',
          'describe' => 'VIP'
        ]);
      DB::table('stylistcategories')->insert(
        ['id' =>'3',
          'name' => 'Начинающий стилист',
          'describe' => 'VIP/4'
        ]);
      DB::table('stylistcategories')->insert(
        [ 'id' =>'2',
          'name' => 'Стилист первой категории',
          'describe' => 'VIP/2'
        ]
      );
    }
}

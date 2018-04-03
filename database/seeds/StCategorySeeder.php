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
          'describe' => 'VIP стилист',
          'name' => 'VIP'
        ]);
      DB::table('stylistcategories')->insert(
        ['id' =>'3',
          'describe' => 'Начинающий стилист',
          'name' => 'VIP/4'
        ]);
      DB::table('stylistcategories')->insert(
        [ 'id' =>'2',
          'describe' => 'Стилист первой категории',
          'name' => 'VIP/2'
        ]
      );
    }
}

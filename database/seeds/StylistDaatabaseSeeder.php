<?php

use Illuminate\Database\Seeder;

class StylistDaatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stylists')->insert(
        [  'id'=>'1',
          'user_id' => '3',
          'category_id' => '1',
          'experience' => 'Опыт',
          'education' => 'Образование',
          'about' => 'Обо мне',
          'rating' => '2.0'
        ]);
      DB::table('stylists')->insert(
        [ 'id'=>'2',
          'user_id' => '4',
          'category_id' => '2',
          'experience' => 'Опыт',
          'education' => 'Образование',
          'about' => 'Обо мне',
          'rating' => '1.0'
        ]);
      DB::table('stylists')->insert(
        ['id'=>'3',
          'user_id' => '5',
          'category_id' => '3',
          'experience' => 'Опыт',
          'education' => 'Образование',
          'about' => 'Обо мне',
          'rating' => '3.0'
        ]);

    }
}

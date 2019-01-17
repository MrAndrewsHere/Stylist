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
          'education' => 'Международная Школа Дизайна',
          'about' => 'Вся моя жизнь связана с индустрией красоты. Еще в школе подруги обращались ко мне за прическами и макияжем, советовались по поводу нарядов на свидания и важные мероприятия. Я с удовольствием помогала им раскрыть свою красоту и очень скоро поняла, что это стало моим призванием',
          'rating' => '2.0',
          'confirmed'=>'1',
        ]);
      DB::table('stylists')->insert(
        [ 'id'=>'2',
          'user_id' => '4',
          'category_id' => '2',
          'experience' => 'Опыт',
          'education' => 'Школа дизайна НИУ ВШЭ',
          'about' => 'Вся моя жизнь связана с индустрией красоты. Еще в школе подруги обращались ко мне за прическами и макияжем, советовались по поводу нарядов на свидания и важные мероприятия. Я с удовольствием помогала им раскрыть свою красоту и очень скоро поняла, что это стало моим призванием',
          'rating' => '1.0',
          'confirmed'=>'1',
        ]);
      DB::table('stylists')->insert(
        ['id'=>'3',
          'user_id' => '5',
          'category_id' => '3',
          'experience' => 'Опыт',
          'education' => 'Британская Высшая Школа Дизайна',
          'about' => 'Вся моя жизнь связана с индустрией красоты. Еще в школе подруги обращались ко мне за прическами и макияжем, советовались по поводу нарядов на свидания и важные мероприятия. Я с удовольствием помогала им раскрыть свою красоту и очень скоро поняла, что это стало моим призванием',
          'rating' => '3.0',
          'confirmed'=>'1',
        ]);

    }
}

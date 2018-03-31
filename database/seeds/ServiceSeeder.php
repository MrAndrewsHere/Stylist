<?php

use App\Service;
use App\servicecategory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $makiyazh = servicecategory::create([
      'name' => 'Макияж',
      'describe' => 'Описание',
    ]);
    $imidzh = servicecategory::create([
      'name' => 'Имидж',
      'describe' => 'Описание',
    ]);
    $sertif = servicecategory::create([
      'name' => 'Подарочный сертификат',
      'describe' => 'Описание',
    ]);
    $prich = servicecategory::create([
      'name' => 'Причёска',
      'describe' => 'Описание',
    ]);
    Service::create([
      'name' => 'Имидж-консультация',
      'category_id' => $makiyazh->id,
      'description' => 'Встреча с личным стилистом, в процессе которой стилист определит ваш цветотиптип фигуры, вы получите рекомендации по подбору одежды и советы по стилю.Имидж-консультация может быть проведена в скайпе.',
      'result' => 'у клиента в кабинете появляется информация от стилиста',
      'price' => '1000',
    ]);
    Service::create([
      'name'=>'Разбор гардероба',
      'category_id'=>$imidzh->id,
      'description'=>'Выявление скрытых возможностей вашего гардероба, создание комплектовс уже имеющимися вещами. Рекомендации по недостающим предметам одежды.для дополнения гардероба.',
      'result'=>'у клиента в кабинете появляется информация от стилиста',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Разработка стилевого решения',
      'category_id'=>$imidzh->id,
      'description'=>'Встреча с личным стилистом, обсуждение ваших пожеланий, определениевашего цветотипа, фигуры, для подбора наилучшие решения.На решение задачи дается 1-2 недели, после этого, в вашем ЛК появитсяразработанное стилевое решение (15 образов, советы по прическе и макияжу)',
      'result'=>'у клиента в кабинете появляется информация от стилиста',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Шоппинг-сопровождение (возможно, в онлайн магазинах)',
      'category_id'=>$imidzh->id,
      'description'=>'Данная услуга осуществляется только после имидж-консультации, котораяможет быть проведена также в скайпе. Стилист свяжется с вами и вы обсудитедетали шоппинга: ваши пожелания, цели, бюджет на покупки, и т.п. Такимобразом стилист сформулирует задачу. После этого вы идете с вашим личнымстилистом по магазинам.',
      'result'=>'за 3-4 часa шопинг-сопровождения обычно можно создать несколькополных комплектов одежды с обувью и аксессуарами.',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Подбор прически (+Онлайн)',
      'category_id'=>$prich->id,
      'description'=>'Cопровождение в салон красоты. Потом предлагает варианты и пойдет с вамив салон красоты, он будет разговоривать с мастером, обяснять что нужно ибыть рядом чтобы контролировать процесс стрижки, и/или окрашивания волос.Салон красоты может быть тот, куда вы постоянно ходите, может быть рядомс домом, или сам стилист может рекомендовать несколько вариантов: выбор за вами',
      'result'=>'новая стрижка и/или цвет волос, и стилист покажет 3 вида прически которые большевсего вам подходят: повседневный, вечерный или клубный, и на свидание илина прогулку.',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Подбор макияжа (2 образа, обучение, шоппинг косметики)',
      'category_id'=>$makiyazh->id,
      'description'=>'Встреча с личным стилистом, в процессе которой стилист определитваш цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может быть проведена в скайпе.',
      'result'=>'у клиента в кабинете появляется информация от стилиста',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Фотосессия',
      'category_id'=>$imidzh->id,
      'description'=>'Встреча с личным стилистом, в процессе которой стилист определитваш цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может быть проведена в скайпе.',
      'result'=>'у клиента в кабинете появляется информация от стилиста',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Пакет или подарочный сертификат «New look»',
      'category_id'=>$sertif->id,
      'description'=>'Встреча с личным стилистом, в процессе которой стилист определитваш цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может быть проведена в скайпе.',
      'result'=>'у клиента в кабинете появляется информация от стилиста',
      'price'=>'2000',

    ]);
    Service::create([
      'name'=>'Пакет или подарочный сертификат «Make-over»',
      'category_id'=>$sertif->id,
      'description'=>'Встреча с личным стилистом, в процессе которой стилист определитваш цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может быть проведена в скайпе.',
      'result'=>'у клиента в кабинете появляется информация от стилиста.',
      'price'=>'2000',

    ]);
//    Service::create([
//      'name'=>'',
//      'category_id'=>,
//      'description'=>'',
//      'result'=>'',
//      'price'=>'2000',
//
//    ]);
  }
}
<?php

use Illuminate\Database\Seeder;

class Service_Price extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $services = App\Service::all();
    $categories = App\stylistcategory::all();
    foreach ($services as $service) {

      $service->stylistcategory()->save($categories[0],['price'=> 3000]);
      $service->stylistcategory()->save($categories[1],['price'=> 2000]);
      $service->stylistcategory()->save($categories[2], ['price'=> 1000]);

    }
  }
}

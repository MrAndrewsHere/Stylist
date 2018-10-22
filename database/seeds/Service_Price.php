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
  { $price2 = collect([
      '3000',
      '2700',
      '2500',
      '2300',
    '3000',
    '2700',
    '2500',
    '2300',
    '3000',
    '2700',
    '2500',
    '2300',
    '3000',
    '2700',
    '2500',
    '2300',
    ]);
    $price3 = collect([
      '2000',
      '1800',
      '1500',
      '1300',
      '2000',
      '1800',
      '1500',
      '1300',
      '2000',
      '1800',
      '1500',
      '1300',
      '2000',
      '1800',
      '1500',
      '1300',
    ]);
    $price1= collect([
      '4000',
      '3800',
      '3500',
      '3200',
      '4000',
      '3800',
      '3500',
      '3200',
      '4000',
      '3800',
      '3500',
      '3200',
      '4000',
      '3800',
      '3500',
      '3200',
    ]);


    $services = App\service::all();
    $categories = App\stylistcategory::all();
    foreach ($services as $service) {

      $service->stylistcategory()->save($categories[0],['price'=> $price1->random()]);
      $service->stylistcategory()->save($categories[1],['price'=> $price2->random()]);
      $service->stylistcategory()->save($categories[2], ['price'=> $price3->random()]);

    }
  }
}

<?php

use Illuminate\Database\Seeder;

class stylist_service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = App\service::all();

        foreach ($services as $service)
        {
          $service->stylists()->save(\App\service::find(1));
          $service->stylists()->save(\App\service::find(2));
          $service->stylists()->save(\App\service::find(3));
        }

    }
}

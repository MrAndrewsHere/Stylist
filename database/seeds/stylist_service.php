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
        $services = App\Service::all();

        foreach ($services as $service)
        {
          $service->stylists()->save(\App\Service::find(1));
          $service->stylists()->save(\App\Service::find(2));
          $service->stylists()->save(\App\Service::find(3));
        }

    }
}

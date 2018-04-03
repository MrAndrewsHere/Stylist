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
        $stylists = App\Stylist::all();
        foreach ($stylists as $stylist)
        {
          $stylist->services()->save(\App\Service::all()->random());
          $stylist->services()->save(\App\Service::all()->random());
        }

    }
}

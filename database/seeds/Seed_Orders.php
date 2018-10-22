<?php

use Illuminate\Database\Seeder;


class Seed_Orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stylists = \App\stylist::all();
        $client = \App\client::find(1);
        foreach ($stylists as $stylist)
        {
            $service = \App\service::all()->random();
            $stylist->orders()->create([
                'client_id' => $client->id,
                'service_id' => $service->id,
                'price' => $service->priceForStylist($stylist)
            ]);
        }
        foreach ($stylists as $stylist)
        {
            $service = \App\service::all()->random();
            $stylist->orders()->create([
                'client_id' => $client->id,
                'service_id' => $service->id,
                'price' => $service->priceForStylist($stylist)
            ]);
        }


    }
}

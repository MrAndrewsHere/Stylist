<?php

use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stylists = \App\stylist::all();
        $services = \App\service::all();
        \App\Order::truncate();
        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            {

                $client = \App\client::all()->random();
                $service = $services->random();
                $date = \Carbon\Carbon::now();
                $date->month = rand(1,12);
                $date->day = rand(1,30);
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'ordered_by_client' => '1',
                    'commission' => '10',
                    'payment' => '10.2',
                    'confirmed_Date' => $date->format('Y-m-d'),

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } // ordered_by_client

        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            {
                $date = \Carbon\Carbon::now();
                $date->month = rand(1,12);
                $date->day = rand(1,30);

                $client = \App\client::all()->random();
                $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'ordered_by_client' => '1',
                    'confirmed_by_stylist' => '1',
                    'commission' => '10',
                    'payment' => '10.2',
                    'confirmed_Date' => $date->format('Y-m-d'),

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } //confirmed_by_stylist

        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            {
                $date = \Carbon\Carbon::now();
                $date->month = rand(1,12);
                $date->day = rand(1,30);

                $client = \App\client::all()->random();
                $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'ordered_by_client' => '1',
                    'confirmed_by_stylist' => '1',
                    'complited' => '1',
                    'commission' => '10',
                    'payment' => '10.2',
                    'confirmed_Date' => $date->format('Y-m-d'),

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } //complited
        foreach ($stylists as $stylist) //payd
        {
            for ($i=1;$i<10;$i++)
            {
                $date = \Carbon\Carbon::now();
                $date->month = rand(1,12);
                $date->day = rand(1,30);

                $client = \App\client::all()->random();
                $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'ordered_by_client' => '1',
                    'confirmed_by_stylist' => '1',
                    'complited' => '1',
                    'paid' => '1',
                    'commission' => '10',
                    'payment' => '10.2',
                    'confirmed_Date' => $date->format('Y-m-d'),

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        }
    }
}

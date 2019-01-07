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
        $client = \App\client::first();
        $services = \App\service::all();
        \App\Order::truncate();
        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            { $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'ordered_by_client' => '1',
                    'commission' => '10',
                    'payment' => '10.2',

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } // ordered_by_client

        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            { $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'confirmed_by_stylist' => '1',
                    'commission' => '10',
                    'payment' => '10.2',

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } //confirmed_by_stylist

        foreach ($stylists as $stylist)
        {
            for ($i=1;$i<10;$i++)
            { $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'complited' => '1',
                    'commission' => '10',
                    'payment' => '10.2',

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        } //complited
        foreach ($stylists as $stylist) //payd
        {
            for ($i=1;$i<10;$i++)
            { $service = $services->random();
                $order = $stylist->orders()->create([
                    'service_id' => $service->id,
                    'price' => $service->priceForStylist($stylist),
                    'client_id' => $client->id,
                    'paid' => '1',
                    'commission' => '10',
                    'payment' => '10.2',

                ]);
                $order->commission($stylist->category->default_commission);
                $order->save();

            }
        }
    }
}

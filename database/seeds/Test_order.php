<?php

use Illuminate\Database\Seeder;

class Test_order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\client::class,3)->create();
    }
}

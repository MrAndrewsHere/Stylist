<?php

use Illuminate\Database\Seeder;

class Commission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =  \App\stylistcategory::all();
        foreach ($categories as $category)
        {
            $category->default_commission = 10;
            $category->save();
        }
    }
}

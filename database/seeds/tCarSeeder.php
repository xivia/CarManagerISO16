<?php

use Illuminate\Database\Seeder;

class tCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tCar')->delete();
        \DB::table('tCar')->insert(array(
            0 => array(
                'name' => "GTR",
                'brand' => "Nissan", // BSP.
            ),
            1 => array(
                'name' => "GTR",
                'brand' => "Nissan", // BSP.
            )
        ));
    }
}

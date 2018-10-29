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
        \DB::table('cars')->delete();
        \DB::table('cars')->insert(array(
            0 => array(
                'name' => "GTR",
                'brand' => "Nissan", 
                'doors' =>  2, 
                'seats' =>  4, 
                'acceleration' =>  3.3, 
                'ps' =>   570, 
                'torque' => 633, 
                'cylinders' => 6, 
                'basePrice' => 119.900, 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
            ),
            1 => array(
                'name' => "GTR",
                'brand' => "Nissan", 
            )
        ));
    }
}

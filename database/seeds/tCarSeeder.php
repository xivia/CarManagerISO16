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
                'transmission' => "automatic", 
                'drivetrain' => "All Wheel Drive", 
                'weight' => 1740, 
                'velocity' => 313, 
                'manufacturingYear' => "2017", 
                
            ),
              1 => array(
                'name' => "M3",
                'brand' => "BMW", 
                'doors' =>  5, 
                'seats' =>  5, 
                'acceleration' =>  3.3, 
                'ps' =>   431, 
                'torque' => 550, 
                'cylinders' => 6, 
                'basePrice' => 63000, 
                'transmission' => "automatic", 
                'drivetrain' => "Rear Wheel Drive", 
                'weight' => 1440, 
                'velocity' => 331, 
                'manufacturingYear' => "2018", 
            ),
               2 => array(
                'name' => "911 Gt2rs",
                'brand' => "Porsche", 
                'doors' =>  2, 
                'seats' =>  2, 
                'acceleration' =>  2.6, 
                'ps' =>   700, 
                'torque' => 750, 
                'cylinders' => 6, 
                'basePrice' => 294.250, 
                'transmission' => "automatic", 
                'drivetrain' => "Rear Wheel Drive", 
                'weight' => 1470.093, 
                'velocity' => 356, 
                'manufacturingYear' => "2018", 
                
            ),
        ));
    }
}

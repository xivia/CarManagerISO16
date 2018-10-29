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
                '' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
                'brand' => "Nissan", 
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

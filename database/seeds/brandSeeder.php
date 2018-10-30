<?php

use Illuminate\Database\Seeder;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->delete();
        \DB::table('brands')->insert(array(
            0 => array(
                'name' => "Nissan",
                'country' => "",
                'foundingYear' => 99999
            ),
            1 => array(
                'name' => "Porsche",
            )
        ));
    }
}
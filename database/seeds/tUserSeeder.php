<?php

use Illuminate\Database\Seeder;

class tUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Users')->delete();
        \DB::table('Users')->insert(array(
        0 => array(
            'id' => 1,
            'name' => "LeAdmin",
            'email' => "admin@admin.de",
            'password' => bcrypt('12345678'),
            'type' => "admin",
        ),
        1 => array(
            'id' => 2,
            'name' => "LeMod",
            'email' => "moderator@moderator.de",
            'password' => bcrypt('12345678'),
            'type' => "moderator",
        ),
        2 => array(
            'id' => 3,
            'name' => "LeGuest",
            'email' => "guest@guest.de",
            'password' => bcrypt('12345678'),
            'type' => "guest",
        )
    ));
    }
}

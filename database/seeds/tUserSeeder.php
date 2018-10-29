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
            'name' => "Name Admin",
            'email' => "admin@admin.edu",
            'password' => bcrypt('1'),
            'type' => 1,
        ),
        1 => array(
            'id' => 2,
            'name' => "Name Mod",
            'email' => "moderator@moderator.edu",
            'password' => bcrypt('1'),
            'type' => 2,
        ),
        2 => array(
            'id' => 3,
            'name' => "Name Guest",
            'email' => "guest@guest.edu",
            'password' => bcrypt('1'),
            'type' => 3,
        )
    ));
    }
}

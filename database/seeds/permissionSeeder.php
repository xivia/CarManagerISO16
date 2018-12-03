<?php

use Illuminate\Database\Seeder;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();
        \DB::table('permissions')->insert(array(
            1 => array(
                'name' => "Admin"
            ),
            2 => array(
                'name' => "Moderator"
            ),
            3 => array(
                'name' => "User"
            )
        ));
    }
}

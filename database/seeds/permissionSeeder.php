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
            2 => array(
                'name' => "Admin"
            ),
            3 => array(
                'name' => "Moderator"
            ),
            1 => array(
                'name' => "User"
            )
        ));
    }
}

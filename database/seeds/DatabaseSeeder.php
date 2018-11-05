<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tUserSeeder::class);
        $this->call(tCarSeeder::class);
        $this->call(brandSeeder::class);
        $this->call(permissionSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use ViaggioTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ViaggioTableSeeder::class);
    }
}

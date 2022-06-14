<?php

use Illuminate\Database\Seeder;
use ViaggiTableSeeder01;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ViaggiTableSeeder01::class);
    }
}

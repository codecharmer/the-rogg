<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //$this->call(TestDataSeeder::class);
        $this->call(PoliticianSeeder::class);
    }
}

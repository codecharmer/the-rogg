<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PoliticianTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}

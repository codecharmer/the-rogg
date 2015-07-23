<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use TheRogg\Domain\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        Schema::drop('users');

        $testUser = new User();
        $testUser->setName('Christopher');
        $testUser->save();
    }
}
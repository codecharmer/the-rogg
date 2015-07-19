<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testUser = new User();
        $testUser->setName('Christopher');
        $testUser->save();
    }
}

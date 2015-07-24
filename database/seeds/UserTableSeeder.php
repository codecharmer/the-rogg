<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use TheRogg\Domain\Party;
use TheRogg\Domain\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        Schema::drop('users');

        $user = new User('Christopher Lamm', 'chris@theantichris.com', Hash::make('password'));
        $user->setParty(Party::Independent);
        $user->save();

        $user = new User('Suzanne Young', 'suzanne@veil22.com', Hash::make('password'));
        $user->save();
    }
}
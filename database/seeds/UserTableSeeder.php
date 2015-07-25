<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use TheRogg\Domain\Party;
use TheRogg\Repositories\Users\EloquentUserRepository;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::drop('users');

        $repo = new EloquentUserRepository();

        $repo->make('Christopher Lamm', 'chris@theantichris.com', 'password', Party::Independent);
        $repo->make('Suzanne Young', 'suzanne@veil22.com', 'password');
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use TheRogg\Domain\House;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\EloquentPoliticianRepository;

class PoliticianTableSeeder extends Seeder
{
    public function run()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Schema::drop('politicians');

        $repo = new EloquentPoliticianRepository();

        $repo->make('Lamar Alexander', State::Tennessee, House::Senate, Party::Republican);
        $repo->make('Bob Corker', State::Tennessee, House::Senate, Party::Republican);
        $repo->make('David Roe', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('John J. Duncan', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Charles Fleischmann', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Scott Desjarlais', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Jim Cooper', State::Tennessee, House::Representatives, Party::Democrat);
        $repo->make('Diane Black', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Marsha Blackburn', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Stephen Fincher', State::Tennessee, House::Representatives, Party::Republican);
        $repo->make('Steven Cohen', State::Tennessee, House::Representatives, Party::Democrat);
    }
}

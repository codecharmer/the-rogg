<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use TheRogg\Domain\House;
use TheRogg\Domain\Party;
use TheRogg\Domain\Politician;
use TheRogg\Domain\State;

class PoliticianTableSeeder extends Seeder
{
    public function run()
    {
        Schema::drop('politicians');

        $politician = new Politician('Lamar Alexander', State::Tennessee, House::Senate, Party::Republican);
        $politician->save();

        $politician = new Politician('Bob Corker', State::Tennessee, House::Senate, Party::Republican);
        $politician->save();

        $politician = new Politician('David Roe', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('John J. Duncan, Jr.', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Charles Fleischmann', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Scott Desjarlais', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Jim Cooper', State::Tennessee, House::Representatives, Party::Democrat);
        $politician->save();

        $politician = new Politician('Diane Black', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Marsha Blackburn', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Stephen Fincher', State::Tennessee, House::Representatives, Party::Republican);
        $politician->save();

        $politician = new Politician('Steve Cohen', State::Tennessee, House::Representatives, Party::Democrat);
        $politician->save();
    }
}

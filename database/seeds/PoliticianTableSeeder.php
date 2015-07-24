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

        $politician = new Politician();
        $politician->setName('Lamar Alexander');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Senate);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Bob Corker');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Senate);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('David Roe');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('John J. Duncan');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Charles Fleischmann');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Scott Desjarlais');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Jim Cooper');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Democrat);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Diane Black');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Marsha Blackburn');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Stephen Fincher');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();

        $politician = new Politician();
        $politician->setName('Steven Cohen');
        $politician->setState(State::Tennessee);
        $politician->setHouse(House::Representatives);
        $politician->setParty(Party::Republican);
        $politician->save();
    }
}

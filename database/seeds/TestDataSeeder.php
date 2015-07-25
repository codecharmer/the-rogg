<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\House;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class TestDataSeeder extends Seeder
{
    private $userRepo;
    private $politicianRepo;

    public function __construct(UserRepo $userRepo, PoliticianRepo $politicianRepo)
    {
        $this->userRepo       = $userRepo;
        $this->politicianRepo = $politicianRepo;
    }

    public function run()
    {
        Schema::drop('users');

        $this->userRepo->make('Christopher Lamm', 'chris@theantichris.com', 'password', Party::Independent);
        $this->userRepo->make('Suzanne Young', 'suzanne@veil22.com', 'password');

        Schema::drop('politicians');

        $this->politicianRepo->make('Lamar Alexander', State::Tennessee, House::Senate, Party::Republican);
        $this->politicianRepo->make('Bob Corker', State::Tennessee, House::Senate, Party::Republican);
        $this->politicianRepo->make('David Roe', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('John J. Duncan', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Charles Fleischmann', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Scott Desjarlais', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Jim Cooper', State::Tennessee, House::Representatives, Party::Democrat);
        $this->politicianRepo->make('Diane Black', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Marsha Blackburn', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Stephen Fincher', State::Tennessee, House::Representatives, Party::Republican);
        $this->politicianRepo->make('Steven Cohen', State::Tennessee, House::Representatives, Party::Democrat);
    }
}

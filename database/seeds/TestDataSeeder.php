<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\PoliticianRatingRepositoryInterface as RatingRepo;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class TestDataSeeder extends Seeder
{
    private $userRepo;
    private $politicianRepo;
    /**
     * @var RatingRepo
     */
    private $ratingRepo;

    public function __construct(PoliticianRepo $politicianRepo, RatingRepo $ratingRepo, UserRepo $userRepo)
    {
        $this->politicianRepo = $politicianRepo;
        $this->ratingRepo     = $ratingRepo;
        $this->userRepo       = $userRepo;
    }

    public function run()
    {
        Schema::drop('users');

        $christopherLamm = $this->userRepo->make('Christopher Lamm', 'chris@theantichris.com', 'password', Party::Independent, '1');
        $this->userRepo->make('Suzanne Young', 'suzanne@veil22.com', 'password', null, '2');

        Schema::drop('politicians');

        $lamarAlexander = $this->politicianRepo->make('Lamar Alexander', State::Tennessee, Office::Senate, Party::Republican, '1');
        $lamarAlexander->setPhoto('alexander-lamar.jpg');
        $lamarAlexander->save();
        $this->politicianRepo->make('Bob Corker', State::Tennessee, Office::Senate, Party::Republican, '2');
        $this->politicianRepo->make('David Roe', State::Tennessee, Office::Representatives, Party::Republican, '3');
        $this->politicianRepo->make('John J. Duncan', State::Tennessee, Office::Representatives, Party::Republican, '4');
        $this->politicianRepo->make('Charles Fleischmann', State::Tennessee, Office::Representatives, Party::Republican, '5');
        $this->politicianRepo->make('Scott Desjarlais', State::Tennessee, Office::Representatives, Party::Republican, '6');
        $this->politicianRepo->make('Jim Cooper', State::Tennessee, Office::Representatives, Party::Democrat, '7');
        $this->politicianRepo->make('Diane Black', State::Tennessee, Office::Representatives, Party::Republican, '8');
        $this->politicianRepo->make('Marsha Blackburn', State::Tennessee, Office::Representatives, Party::Republican, '9');
        $this->politicianRepo->make('Stephen Fincher', State::Tennessee, Office::Representatives, Party::Republican, '10');
        $this->politicianRepo->make('Steven Cohen', State::Tennessee, Office::Representatives, Party::Democrat, '11');

        Schema::drop('politician_ratings');

        $scores = [
            'First'   => 1,
            'Second'  => 2,
            'Third'   => 3,
            'Fourth'  => 4,
            'Fifth'   => 5,
            'Sixth'   => 1,
            'Seventh' => 2,
            'Eighth'  => 3,
            'Ninth'   => 4,
            'Tenth'   => 5,
        ];
        $this->ratingRepo->make($christopherLamm->getId(), $lamarAlexander->getId(), $scores);
    }
}

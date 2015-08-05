<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\House;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Ratings\RatingRepositoryInterface as RatingRepo;
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
        $this->userRepo->make('Suzanne Young', 'suzanne@veil22.com', 'password');

        Schema::drop('politicians');

        $lamarAlexander = $this->politicianRepo->make('Lamar Alexander', State::Tennessee, House::Senate, Party::Republican, '1');
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

        Schema::drop('ratings');

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
        $rating = $this->ratingRepo->make($christopherLamm->getId(), $lamarAlexander->getId(), $scores);
        $this->ratingRepo->save($rating);
    }
}

<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Comments\CommentRepositoryInterface as CommentRepo;
use TheRogg\Repositories\Politicians\PoliticianRatingRepositoryInterface as RatingRepo;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class TestDataSeeder extends Seeder
{
    private $commentRepo;
    private $politicianRepo;
    private $ratingRepo;
    private $userRepo;

    public function __construct(CommentRepo $commentRepo, PoliticianRepo $politicianRepo, RatingRepo $ratingRepo, UserRepo $userRepo)
    {
        $this->commentRepo    = $commentRepo;
        $this->politicianRepo = $politicianRepo;
        $this->ratingRepo     = $ratingRepo;
        $this->userRepo       = $userRepo;
    }

    public function run()
    {
        Schema::drop('users');

        $userPhoto = 'horse100.jpg';

        $christopherLamm = $this->userRepo->make('theantichris', 'chris@theantichris.com', 'password', Party::Independent, $userPhoto, '1');
        $christopherLamm->makeAdmin();
        $christopherLamm->save();

        $suzanne = $this->userRepo->make('syoung', 'suzanne@veil22.com', 'password', null, $userPhoto, '2');
        $suzanne->save();

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

        Schema::drop('comments');

        $this->commentRepo->make('1', '1', "Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.");
        $this->commentRepo->make('1', '1', "Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.");
    }
}

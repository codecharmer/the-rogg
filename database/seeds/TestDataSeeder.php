<?php

use Illuminate\Database\Seeder;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class TestDataSeeder extends Seeder
{
    private $politicianRepo;
    private $reviewRepo;
    private $userRepo;

    public function __construct(PoliticianRepo $politicianRepo, ReviewRepo $reviewRepo, UserRepo $userRepo)
    {
        $this->politicianRepo = $politicianRepo;
        $this->reviewRepo     = $reviewRepo;
        $this->userRepo       = $userRepo;
    }

    public function run()
    {
        Schema::drop('users');

        $userPhoto = 'horse100.jpg';

        $suzanne = $this->userRepo->make('syoung', 'suzanne@veil22.com', 'password', null, null, $userPhoto, '2');
        $suzanne->Confirm();
        $suzanne->save();

        Schema::drop('politicians');

        $politicianPhoto = 'cat100.jpg';

        $lamarAlexander = $this->politicianRepo->make('Lamar Alexander', State::Tennessee, Office::Senate, Party::Republican, $politicianPhoto, null, '1');
        $lamarAlexander->setBio("Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.");
        $lamarAlexander->save();

        $bobCorker = $this->politicianRepo->make('Bob Corker', State::Tennessee, Office::Senate, Party::Republican, $politicianPhoto, null, '2');

        $this->politicianRepo->make('David Roe', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '1st', '3');
        $this->politicianRepo->make('John J. Duncan', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '2nd', '4');
        $this->politicianRepo->make('Charles Fleischmann', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '3rd', '5');
        $this->politicianRepo->make('Scott Desjarlais', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '4th', '6');
        $this->politicianRepo->make('Jim Cooper', State::Tennessee, Office::Representatives, Party::Democrat, $politicianPhoto, '5th', '7');
        $this->politicianRepo->make('Diane Black', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '6th', '8');
        $this->politicianRepo->make('Marsha Blackburn', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '7th', '9');
        $this->politicianRepo->make('Stephen Fincher', State::Tennessee, Office::Representatives, Party::Republican, $politicianPhoto, '8th', '10');
        $this->politicianRepo->make('Steven Cohen', State::Tennessee, Office::Representatives, Party::Democrat, $politicianPhoto, '9th', '11');

        Schema::drop('politician_reviews');

        $scores1 = [
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

        $scores2 = [
            'First'   => 4,
            'Second'  => 2,
            'Third'   => 5,
            'Fourth'  => 3,
            'Fifth'   => 3,
            'Sixth'   => 2,
            'Seventh' => 4,
            'Eighth'  => 5,
            'Ninth'   => 2,
            'Tenth'   => 5,
        ];

        $comment1 = "Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.";
        $comment2 = "Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.";

        $this->reviewRepo->make($suzanne->getId(), $bobCorker->getId(), $scores1, $comment2);
        $this->reviewRepo->make($suzanne->getId(), $bobCorker->getId(), $scores2, $comment2);
    }
}

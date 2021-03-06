<?php

namespace TheRogg\Http\Controllers\Politicians;

use Auth;
use InvalidArgumentException;
use Request;
use Response;
use TheRogg\Domain\Politician;
use TheRogg\Domain\PoliticianReview;
use TheRogg\Domain\Politicians\Amendment;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListModel;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianReviewModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class PoliticianController extends Controller
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

    public function getGetReview()
    {
        $userId       = Request::get('userId');
        $politicianId = Request::get('politicianId');

        $review = $this->reviewRepo->findByUserAndPolitician($userId, $politicianId);

        if (empty($review))
            $model = new PoliticianReviewModel('', [], '');
        else
            $model = new PoliticianReviewModel($review->getId(), $review->getScores(), $review->getComment());

        return Response::json($model);
    }

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['_id', 'name', 'state', 'office', 'party', 'isPresidentialCandidate', 'photo', 'district', 'slug']);
        $viewModels  = [];

        /** @var Politician $politician */
        foreach ($politicians as $politician)
        {
            $reviews = $this->reviewRepo->getByPoliticianId($politician->getId());

            if ($reviews->isEmpty())
            {
                $rating = 1;
            }
            else
            {
                $total = 0;
                /** @var PoliticianReview $review */
                foreach ($reviews as $review)
                    $total += $review->getAverageScore();

                $rating = $total / $reviews->count();
            }

            $model = new PoliticianListModel(
                $politician->getId(),
                $politician->getName(),
                $politician->getState(),
                $politician->getOffice(),
                $politician->getParty(),
                $politician->IsPresidentialCandidate(),
                $politician->getPhoto(),
                $politician->getDistrict(),
                $politician->getSlug(),
                $rating
            );

            $viewModels[] = $model;
        }

        return Response::json($viewModels);
    }

    public function postReviewPolitician()
    {
        $model        = Request::json('model');
        $userId       = $model['userId'];
        $politicianId = $model['politicianId'];

        $this->validateIds($userId, $politicianId);

        $review = $this->reviewRepo->findByUserAndPolitician($userId, $politicianId);

        if (empty($review))
        {
            $ratings = [
                Amendment::First   => $model['ratings']['First'],
                Amendment::Second  => $model['ratings']['Second'],
                Amendment::Third   => $model['ratings']['Third'],
                Amendment::Fourth  => $model['ratings']['Fourth'],
                Amendment::Fifth   => $model['ratings']['Fifth'],
                Amendment::Sixth   => $model['ratings']['Sixth'],
                Amendment::Seventh => $model['ratings']['Seventh'],
                Amendment::Eighth  => $model['ratings']['Eighth'],
                Amendment::Ninth   => $model['ratings']['Ninth'],
                Amendment::Tenth   => $model['ratings']['Tenth'],
            ];

            $this->reviewRepo->make($userId, $politicianId, $ratings, $model['comment']);
        }
    }

    private function validateIds($userId, $politicianId)
    {
        if (!$this->userRepo->isValidUser($userId))
            throw new InvalidArgumentException($userId . ' is not a valid user.');

        if (!$this->politicianRepo->isValidPolitician($politicianId))
            throw new InvalidArgumentException($politicianId . ' is not a valid politician.');

        if (Auth::user()->getId() != $userId)
            throw new InvalidArgumentException('Invalid user');
    }
}
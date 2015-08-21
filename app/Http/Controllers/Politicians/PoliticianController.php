<?php

namespace TheRogg\Http\Controllers\Politicians;

use InvalidArgumentException;
use Request;
use Response;
use TheRogg\Domain\Politician;
use TheRogg\Domain\Politicians\Amendment;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListModel;
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

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['_id', 'name', 'state', 'office', 'party', 'isPresidentialCandidate', 'photo', 'district', 'slug']);
        $viewModels  = [];

        /** @var Politician $politician */
        foreach ($politicians as $politician)
        {
            $model = new PoliticianListModel(
                $politician->getId(),
                $politician->getName(),
                $politician->getState(),
                $politician->getOffice(),
                $politician->getParty(),
                $politician->IsPresidentialCandidate(),
                $politician->getPhoto(),
                $politician->getDistrict(),
                $politician->getSlug()
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
                Amendment::First   => $model['ratings'][0],
                Amendment::Second  => $model['ratings'][1],
                Amendment::Third   => $model['ratings'][2],
                Amendment::Fourth  => $model['ratings'][3],
                Amendment::Fifth   => $model['ratings'][4],
                Amendment::Sixth   => $model['ratings'][5],
                Amendment::Seventh => $model['ratings'][6],
                Amendment::Eighth  => $model['ratings'][7],
                Amendment::Ninth   => $model['ratings'][8],
                Amendment::Tenth   => $model['ratings'][9],
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
    }
}
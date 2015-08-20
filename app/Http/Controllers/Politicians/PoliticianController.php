<?php

namespace TheRogg\Http\Controllers\Politicians;

use InvalidArgumentException;
use Request;
use Response;
use TheRogg\Domain\Politician;
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
        // TODO: Authentication.
        // TODO: CSRF token.

        $this->politicianRepo = $politicianRepo;
        $this->reviewRepo     = $reviewRepo;
        $this->userRepo       = $userRepo;
    }

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['_id', 'name', 'state', 'office', 'party', 'isPresidentialCandidate', 'photo', 'district']);
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

    public function putReviewPolitician()
    {
        $model        = Request::json();
        $politicianId = $model->get('politicianId');
        $userId       = $model->get('userId');
        $scores       = $model->get('scores');
        $comment      = $model->get('comment');

        $this->validateIds($userId, $politicianId);

        $review = $this->reviewRepo->findByUserAndPolitician($userId, $politicianId);

        if (empty($review))
            $this->reviewRepo->make($userId, $politicianId, $scores, $comment);
        else
        {
            $review->setScores($scores);
            $review->setComment($comment);
            $this->reviewRepo->save($review);
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
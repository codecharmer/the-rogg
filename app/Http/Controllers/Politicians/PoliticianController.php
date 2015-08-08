<?php

namespace TheRogg\Http\Controllers\Politicians;

use Illuminate\Database\Eloquent\Collection;
use InvalidArgumentException;
use Request;
use Response;
use TheRogg\Domain\Comment;
use TheRogg\Domain\Politician;
use TheRogg\Domain\PoliticianRating;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianCommentModel;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianDetailsModel;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListModel;
use TheRogg\Repositories\Comments\CommentRepositoryInterface as CommentRepo;
use TheRogg\Repositories\Politicians\PoliticianRatingRepositoryInterface as RatingRepo;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class PoliticianController extends Controller
{
    private $commentRepo;
    private $politicianRepo;
    private $ratingRepo;
    private $userRepo;

    public function __construct(CommentRepo $commentRepo, PoliticianRepo $politicianRepo, RatingRepo $ratingRepo, UserRepo $userRepo)
    {
        // TODO: Authentication.
        // TODO: CSRF token.

        $this->commentRepo    = $commentRepo;
        $this->politicianRepo = $politicianRepo;
        $this->ratingRepo     = $ratingRepo;
        $this->userRepo       = $userRepo;
    }

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['_id', 'name', 'state', 'office', 'party']);
        $models      = [];

        /** @var Politician $politician */
        foreach ($politicians as $politician)
        {
            $model = new PoliticianListModel(
                $politician->getId(),
                $politician->getName(),
                $politician->getState(),
                $politician->getOffice(),
                $politician->getParty()
            );

            $models[] = $model;
        }

        return Response::json($models);
    }

    public function getGetPolitician()
    {
        $id = Request::get('id');

        /** @var Politician $politician */
        $politician = $this->politicianRepo->find($id);

        $ratings = $this->ratingRepo->getByPoliticianId($politician->getId());;
        $averageRating = $this->calculateAverageRating($ratings);

        $comments      = $this->commentRepo->getByPoliticianId($politician->getId());
        $commentModels = [];
        /** @var Comment $comment */
        foreach ($comments as $comment)
            $commentModels[] = new PoliticianCommentModel($comment->getUserId(), $comment->getText(), $comment->getTimestamp());

        $model = new PoliticianDetailsModel(
            $politician->getId(),
            $politician->getName(),
            $politician->getState(),
            $politician->getOffice(),
            $politician->getParty(),
            $averageRating,
            $commentModels
        );

        return Response::json($model);
    }

    public function putRatePolitician()
    {
        $model        = Request::json();
        $politicianId = $model->get('politicianId');
        $userId       = $model->get('userId');
        $scores       = $model->get('scores');

        $this->validateIds($userId, $politicianId);

        $rating = $this->ratingRepo->findByUserAndPolitician($userId, $politicianId);

        if (empty($rating))
            $this->ratingRepo->make($userId, $politicianId, $scores);
        else
        {
            $rating->setScores($scores);
            $this->ratingRepo->save($rating);
        }
    }

    public function putCommentOnPolitician()
    {
        $model        = Request::json();
        $politicianId = $model->get('politicianId');
        $userId       = $model->get('userId');
        $text         = $model->get('text');

        $this->validateIds($userId, $politicianId);

        $this->commentRepo->make($userId, $politicianId, $text);
    }

    /**
     * @param Collection $ratings
     *
     * @return float
     */
    private function calculateAverageRating($ratings)
    {
        $averages = 0;

        /** @var PoliticianRating $rating */
        foreach ($ratings as $rating)
            $averages += $rating->getAverageScore();

        $averageRating = $averages / $ratings->count();

        return $averageRating;
    }

    private function validateIds($userId, $politicianId)
    {
        if (!$this->userRepo->isValidUser($userId))
            throw new InvalidArgumentException($userId . ' is not a valid user.');

        if (!$this->politicianRepo->isValidPolitician($politicianId))
            throw new InvalidArgumentException($politicianId . ' is not a valid politician.');
    }
}
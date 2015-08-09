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

class AdminPoliticianController extends Controller
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
        $viewModels  = [];

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

            $viewModels[] = $model;
        }

        return Response::json($viewModels);
    }

    public function getGetDetails()
    {

    }
}
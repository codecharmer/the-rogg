<?php

namespace TheRogg\Http\Controllers\Politicians;

use Exception;
use Request;
use Response;
use TheRogg\Domain\Politician;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\AdminPoliticianDetailsModel;
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
        $id = Request::get('id');

        /** @var Politician $politician */
        $politician = $this->politicianRepo->find($id);

        $viewModel = new AdminPoliticianDetailsModel(
            $politician->getId(),
            $politician->getName(),
            $politician->getState(),
            $politician->getOffice(),
            $politician->getParty()
        );

        return Response::json($viewModel);
    }

    public function putAddPolitician()
    {
        $model                   = Request::json();
        $name                    = $model->get('name');
        $state                   = $model->get('state');
        $office                  = $model->get('office');
        $party                   = $model->get('party');
        $isPresidentialCandidate = $model->get('isPresidentialCandidate');

        $politician = $this->politicianRepo->findBy('name', $name);
        if (!empty($politician))
            throw new Exception($name . ' already exists in the system.');

        $politician = $this->politicianRepo->make($name, $state, $office, $party);
        if ($isPresidentialCandidate)
        {
            $politician->setIsPresidentialCandidate(true);
            $this->politicianRepo->save($politician);
        }

        return Response::json($politician->getId());
    }
}
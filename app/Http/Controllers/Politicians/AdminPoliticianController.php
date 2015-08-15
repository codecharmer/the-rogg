<?php

namespace TheRogg\Http\Controllers\Politicians;

use Exception;
use Request;
use Response;
use TheRogg\Domain\Politician;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\AdminPoliticianDetailsModel;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;

class AdminPoliticianController extends Controller
{
    private $politicianRepo;

    public function __construct(PoliticianRepo $politicianRepo)
    {
        // TODO: Authentication.
        // TODO: CSRF token.

        $this->politicianRepo = $politicianRepo;
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

    public function postAddPolitician()
    {
        $model                   = Request::json();
        $name                    = $model->get('name');
        $state                   = $model->get('state');
        $office                  = $model->get('office');
        $party                   = $model->get('party');
        $photo                   = $model->get('photo') ? $model->get('photo') : null;
        $message                 = $model->get('message') ? $model->get('message') : null;
        $isPresidentialCandidate = $model->get('isPresidentialCandidate') ? true : false;

        $politician = $this->politicianRepo->findBy('name', $name);
        if (!empty($politician))
            throw new Exception($name . ' already exists.');

        try
        {
            $politician = $this->politicianRepo->make($name, $state, $office, $party);
            $politician->setPhoto($photo);
            $politician->setMessage($message);
            $politician->setIsPresidentialCandidate($isPresidentialCandidate);
            $this->politicianRepo->save(($politician));

            return Response::json($politician->getId());
        }
        catch (Exception $e)
        {
            $this->politicianRepo->delete($politician->getId());
            throw $e;
        }
    }

    public function putUpdatePolitician()
    {
        $model = Request::json();
        $id    = $model->get('id');

        if (empty($id))
            throw new Exception('A politician ID must be supplied.');

        $name                    = $model->get('name');
        $state                   = $model->get('state');
        $office                  = $model->get('office');
        $party                   = $model->get('party');
        $photo                   = $model->get('photo') ? $model->get('photo') : null;
        $message                 = $model->get('message') ? $model->get('message') : null;
        $isPresidentialCandidate = $model->get('isPresidentialCandidate') ? true : false;

        /** @var Politician $politician */
        $politician = $this->politicianRepo->find($id);
        if (empty($politician))
            throw new Exception('Politician ' . $id . ' does not exist.');

        $politician->setName($name);
        $politician->setState($state);
        $politician->setOffice($office);
        $politician->setParty($party);
        $politician->setPhoto($photo);
        $politician->setMessage($message);
        $politician->setIsPresidentialCandidate($isPresidentialCandidate);

        $this->politicianRepo->save($politician);
    }

    public function deleteDeletePolitician()
    {
        $id = Request::get('id');

        $this->politicianRepo->delete([$id]);
    }
}
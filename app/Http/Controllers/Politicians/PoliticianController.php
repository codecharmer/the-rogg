<?php

namespace TheRogg\Http\Controllers\Politicians;

use Response;
use TheRogg\Domain\Politician;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListViewModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;

class PoliticianController extends Controller
{
    private $politicianRepo;

    public function __construct(PoliticianRepo $politicianRepo)
    {
        $this->politicianRepo = $politicianRepo;
    }

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['name', 'state', 'house', 'party']);
        $models      = [];

        /** @var Politician $politician */
        foreach ($politicians as $politician)
        {
            $model    = new PoliticianListViewModel($politician->getName(), $politician->getState(), $politician->getHouse(), $politician->getParty());
            $models[] = $model;
        }

        return Response::json($models);
    }
}
<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail;

use Illuminate\Contracts\View\View;
use TheRogg\Domain\Politician;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianDetailModel;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;

class PoliticianDetailComposer
{
    private $politicianRepo;

    public function __construct(PoliticianRepo $politicianRepo)
    {
        $this->politicianRepo = $politicianRepo;
    }

    public function compose(View $view)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $slug = $view->getData()['slug'];

        /** @var Politician $politician */
        $politician = $this->politicianRepo->findBy('slug', $slug);

        $politicianModel = new PoliticianModel(
            $politician->getId(),
            $politician->getName(),
            $politician->getOffice(),
            $politician->getParty(),
            $politician->getState(),
            $politician->getPhoto(),
            $politician->getBio(),
            $politician->getDistrict()
        );

        $politicianDetail = new PoliticianDetailModel($politicianModel);

        $view->with('politicianDetail', $politicianDetail);
    }
}
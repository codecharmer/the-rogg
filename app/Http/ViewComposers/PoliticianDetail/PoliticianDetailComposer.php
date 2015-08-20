<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail;

use Illuminate\Contracts\View\View;
use TheRogg\Domain\Politician;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianDetailModel;
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

        $fields = ['_id', 'name', 'photo', 'bio'];
        /** @var Politician $politician */
        $politician = $this->politicianRepo->findBy('slug', $slug, $fields);

        $politicianDetail = new PoliticianDetailModel($politician->getId(), $politician->getName(), $politician->getPhoto(), $politician->getBio());

        $view->with('politicianDetail', $politicianDetail);
    }
}
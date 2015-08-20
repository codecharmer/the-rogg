<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail;

use Illuminate\Contracts\View\View;
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

        $politician = $this->politicianRepo->findBy('slug', $slug);

        $view->with('politician', $politician);
    }
}
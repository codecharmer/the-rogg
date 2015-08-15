<?php

namespace TheRogg\Http\ViewComposers\Home;

use Illuminate\Contracts\View\View;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;

class HomeComposer
{
    private $reviewRepo;

    public function __construct(ReviewRepo $reviewRepo)
    {
        $this->reviewRepo = $reviewRepo;
    }

    public function compose(View $view)
    {
        $reviews = $this->reviewRepo->get(3);

        $view->with('reviews', $reviews);
    }
}
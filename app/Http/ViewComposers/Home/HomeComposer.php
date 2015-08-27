<?php

namespace TheRogg\Http\ViewComposers\Home;

use Illuminate\Contracts\View\View;
use TheRogg\Domain\Politician;
use TheRogg\Domain\PoliticianReview;
use TheRogg\Domain\User;
use TheRogg\Http\ViewComposers\Home\Models\HomePoliticianModel;
use TheRogg\Http\ViewComposers\Home\Models\HomePoliticianReviewModel;
use TheRogg\Http\ViewComposers\Home\Models\HomeUserModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class HomeComposer
{
    private $reviewRepo;
    private $userRepo;
    private $politicianRepo;

    public function __construct(ReviewRepo $reviewRepo, UserRepo $userRepo, PoliticianRepo $politicianRepo)
    {
        $this->reviewRepo     = $reviewRepo;
        $this->userRepo       = $userRepo;
        $this->politicianRepo = $politicianRepo;
    }

    public function compose(View $view)
    {
        $recentReviewModels = $this->getRecentReviews();
        $topFirstReviews    = $this->getTopReviewsByAmendment('First');

        $view->with(['recentReviews' => $recentReviewModels, 'topFirstReviews' => $topFirstReviews]);
    }

    private function getRecentReviews()
    {
        $recentReviews = [];
        $reviews       = $this->reviewRepo->get(3);

        /** @var PoliticianReview $review */
        foreach ($reviews as $review)
        {
            /** @var User $user */
            $user = $this->userRepo->find($review->getUserId(), ['_id', 'photo', 'username']);
            /** @var Politician $politician */
            $politician      = $this->politicianRepo->find($review->getPoliticianId(), ['_id', 'name', 'slug']);
            $userModel       = new HomeUserModel($user->getId(), $user->getUsername(), $user->getPhoto());
            $politicianModel = new HomePoliticianModel($politician->getId(), $politician->getName(), $politician->getSlug());
            $model           = new HomePoliticianReviewModel($userModel, $politicianModel, $review->getAverageScore(), $review->getComment(), $review->getUpdatedAt());
            $recentReviews[] = $model;
        }

        return $recentReviews;
    }
    
    private function getTopReviewsByAmendment($amendment)
    {
        $reviewModels = [];
        $reviews      = $this->reviewRepo->getTopReviewsByAmendment($amendment);

        /** @var PoliticianReview $review */
        foreach ($reviews as $review)
        {
            /** @var User $user */
            $user = $this->userRepo->find($review->getUserId(), ['_id', 'photo', 'username']);
            /** @var Politician $politician */
            $politician      = $this->politicianRepo->find($review->getPoliticianId(), ['_id', 'name', 'slug']);
            $userModel       = new HomeUserModel($user->getId(), $user->getUsername(), $user->getPhoto());
            $politicianModel = new HomePoliticianModel($politician->getId(), $politician->getName(), $politician->getSlug());
            $model           = new HomePoliticianReviewModel($userModel, $politicianModel, $review->getAverageScore(), $review->getComment(), $review->getUpdatedAt());
            $reviewModels[]  = $model;
        }

        return $reviewModels;
    }
}
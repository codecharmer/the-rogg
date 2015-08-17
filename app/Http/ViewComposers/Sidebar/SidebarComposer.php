<?php

namespace TheRogg\Http\ViewComposers\Sidebar;

use Illuminate\Contracts\View\View;
use TheRogg\Domain\Politician;
use TheRogg\Domain\User;
use TheRogg\Http\ViewComposers\Sidebar\Models\SidebarPoliticianModel;
use TheRogg\Http\ViewComposers\Sidebar\Models\SidebarPoliticianReviewModel;
use TheRogg\Http\ViewComposers\Sidebar\Models\SidebarUserModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class SidebarComposer
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
        $reviewModel = $this->getRandomReview();

        $view->with(['review' => $reviewModel]);
    }

    private function getRandomReview()
    {
        $review = $this->reviewRepo->getRandom();
        /** @var User $user */
        $user = $this->userRepo->find($review->getUserId(), ['_id', 'photo', 'username']);
        /** @var Politician $politician */
        $politician      = $this->politicianRepo->find($review->getPoliticianId(), ['_id', 'name']);
        $userModel       = new SidebarUserModel($user->getId(), $user->getUsername(), $user->getPhoto());
        $politicianModel = new SidebarPoliticianModel($politician->getId(), $politician->getName());
        $randomReview    = new SidebarPoliticianReviewModel($userModel, $politicianModel, $review->getAverageScore(), $review->getComment(), $review->getUpdatedAt());

        return $randomReview;
    }
}
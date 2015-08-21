<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail;

use Auth;
use Illuminate\Contracts\View\View;
use Jenssegers\Mongodb\Eloquent\Collection;
use TheRogg\Domain\Politician;
use TheRogg\Domain\PoliticianReview;
use TheRogg\Domain\User;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianDetailModel;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianModel;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianReviewModel;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\UserModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class PoliticianDetailComposer
{
    private $politicianRepo;
    private $reviewRepo;
    private $userRepo;

    public function __construct(PoliticianRepo $politicianRepo, ReviewRepo $reviewRepo, UserRepo $userRepo)
    {
        $this->politicianRepo = $politicianRepo;
        $this->reviewRepo     = $reviewRepo;
        $this->userRepo       = $userRepo;
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
            $politician->getDistrict(),
            $politician->getSlug()
        );

        $reviews = $this->reviewRepo->getByPoliticianId($politician->getId());

        $rating        = $reviews->count() > 0 ? $this->getAverageScore($reviews) : 0;
        $recentReviews = $reviews->count() > 0 ? $this->getRecentReviews($reviews) : null;

        $alreadyRated = $this->alreadyRated($politician->getId());

        $politicianDetail = new PoliticianDetailModel($politicianModel, $rating, $recentReviews, $alreadyRated);

        $view->with('politicianDetail', $politicianDetail);
    }

    /**
     * @param Collection $reviews
     *
     * @return float
     */
    private function getAverageScore($reviews)
    {
        $totalScore = 0;

        /** @var PoliticianReview $review */
        foreach ($reviews as $review)
            $totalScore += $review->getAverageScore();

        return round($totalScore / $reviews->count());
    }

    /**
     * @param Collection $reviews
     *
     * @return PoliticianReview[]
     */
    private function getRecentReviews($reviews)
    {
        $count = $reviews->count() >= 5 ? 5 : $reviews->count();

        $recentReviews = [];
        for ($i = 0; $i < $count; $i++)
        {
            /** @var PoliticianReview $review */
            $review = $reviews->get($i);
            /** @var User $user */
            $user            = $this->userRepo->find($review->getUserId());
            $userModel       = new UserModel($user->getId(), $user->getUsername(), $user->getPhoto());
            $reviewModel     = new PoliticianReviewModel($userModel, $review->getAverageScore(), $review->getComment(), $review->getUpdatedAt());
            $recentReviews[] = $reviewModel;
        }

        return $recentReviews;
    }

    private function alreadyRated($politicianId)
    {
        $currentUser = Auth::user();

        $review = $this->reviewRepo->findByUserAndPolitician($currentUser->getId(), $politicianId);

        return !empty($review);
    }
}
<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail;

use Illuminate\Contracts\View\View;
use Jenssegers\Mongodb\Eloquent\Collection;
use TheRogg\Domain\Politician;
use TheRogg\Domain\PoliticianReview;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianDetailModel;
use TheRogg\Http\ViewComposers\PoliticianDetail\Models\PoliticianModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Politicians\PoliticianReviewRepositoryInterface as ReviewRepo;

class PoliticianDetailComposer
{
    private $politicianRepo;
    /**
     * @var ReviewRepo
     */
    private $reviewRepo;

    public function __construct(PoliticianRepo $politicianRepo, ReviewRepo $reviewRepo)
    {
        $this->politicianRepo = $politicianRepo;
        $this->reviewRepo     = $reviewRepo;
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

        $reviews = $this->reviewRepo->getByPoliticianId($politician->getId());

        $rating = $this->getAverageScore($reviews);

        $politicianDetail = new PoliticianDetailModel($politicianModel, $rating);

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
}
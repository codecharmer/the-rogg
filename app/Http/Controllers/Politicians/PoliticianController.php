<?php

namespace TheRogg\Http\Controllers\Politicians;

use Illuminate\Database\Eloquent\Collection;
use Request;
use Response;
use TheRogg\Domain\Politician;
use TheRogg\Domain\Rating;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianDetailsModel;
use TheRogg\Http\Controllers\Politicians\Models\PoliticianListModel;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;
use TheRogg\Repositories\Ratings\RatingRepositoryInterface as RatingRepo;

class PoliticianController extends Controller
{
    private $politicianRepo;
    private $ratingRepo;

    public function __construct(PoliticianRepo $politicianRepo, RatingRepo $ratingRepo)
    {
        // TODO: Authentication.
        // TODO: CSRF token.

        $this->politicianRepo = $politicianRepo;
        $this->ratingRepo     = $ratingRepo;
    }

    public function getGetList()
    {
        $politicians = $this->politicianRepo->getAll(['_id', 'name', 'state', 'house', 'party']);
        $models      = [];

        /** @var Politician $politician */
        foreach ($politicians as $politician)
        {
            $model = new PoliticianListModel(
                $politician->getId(),
                $politician->getName(),
                $politician->getState(),
                $politician->getHouse(),
                $politician->getParty()
            );

            $models[] = $model;
        }

        return Response::json($models);
    }

    public function getGetPolitician()
    {
        $id = Request::get('id');

        /** @var Politician $politician */
        $politician = $this->politicianRepo->find($id);

        $ratings = $this->ratingRepo->getByPoliticianId($politician->getId());;
        $averageRating = $this->calculateAverageRatings($ratings);

        $model = new PoliticianDetailsModel(
            $politician->getId(),
            $politician->getName(),
            $politician->getState(),
            $politician->getHouse(),
            $politician->getParty(),
            $averageRating
        );

        return Response::json($model);
    }

    public function putRatePolitician()
    {
        $model            = Request::json();
        $politicianId     = $model->get('politicianId');
        $userId           = $model->get('userId');
        $submittedRatings = $model->get('ratings');

        // TODO: Validate user and politician.

        $rating = $this->ratingRepo->findByUserAndPolitician($userId, $politicianId);

        if (empty($rating))
        {
            $rating = $this->ratingRepo->make($userId, $politicianId, $submittedRatings);
            $rating->setRatings($submittedRatings);
            $this->ratingRepo->save($rating);
        }
        else
        {
            $rating->setRatings($submittedRatings);
            $this->ratingRepo->save($rating);
        }
    }

    /**
     * @param Collection $ratings
     *
     * @return float
     */
    private function calculateAverageRatings($ratings)
    {
        $averages = 0;

        /** @var Rating $rating */
        foreach ($ratings as $rating)
            $averages += $rating->getAverageRating();

        $averageRating = $averages / $ratings->count();

        return $averageRating;
    }
}
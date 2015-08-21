<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianDetailModel
{
    public $politician;
    public $rating;
    public $recentReviews;
    public $alreadyRated;

    public function __construct($politician, $rating, $recentReviews, $alreadyRated)
    {
        $this->politician    = $politician;
        $this->rating        = $rating;
        $this->recentReviews = $recentReviews;
        $this->alreadyRated  = $alreadyRated;
    }
}
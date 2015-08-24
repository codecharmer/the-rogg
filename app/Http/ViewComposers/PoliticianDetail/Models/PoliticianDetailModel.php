<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianDetailModel
{
    public $politician;
    public $rating;
    public $recentReviews;

    public function __construct($politician, $rating, $recentReviews)
    {
        $this->politician    = $politician;
        $this->rating        = $rating;
        $this->recentReviews = $recentReviews;
    }
}
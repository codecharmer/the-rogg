<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianDetailModel
{
    public $politician;
    public $rating;

    public function __construct($politician, $rating)
    {
        $this->politician = $politician;
        $this->rating     = $rating;
    }
}
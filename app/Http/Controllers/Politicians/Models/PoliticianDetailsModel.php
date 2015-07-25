<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianDetailsModel
{
    public $id;
    public $name;
    public $state;
    public $house;
    public $party;
    public $averageRating;

    public function __construct($id, $name, $state, $house, $party, $averageRating)
    {
        $this->id            = $id;
        $this->name          = $name;
        $this->state         = $state;
        $this->house         = $house;
        $this->party         = $party;
        $this->averageRating = $averageRating;
    }
}
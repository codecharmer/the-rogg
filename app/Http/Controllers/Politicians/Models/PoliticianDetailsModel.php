<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianDetailsModel
{
    public $id;
    public $name;
    public $state;
    public $office;
    public $party;
    public $averageRating;

    public function __construct($id, $name, $state, $office, $party, $averageRating)
    {
        $this->id            = $id;
        $this->name          = $name;
        $this->state         = $state;
        $this->office        = $office;
        $this->party         = $party;
        $this->averageRating = $averageRating;
    }
}
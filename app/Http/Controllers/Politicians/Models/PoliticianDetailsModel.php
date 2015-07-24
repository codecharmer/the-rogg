<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianDetailsModel
{
    public $id;
    public $name;
    public $state;
    public $house;
    public $party;
    public $ratings;
    public $comments;

    public function __construct($id, $name, $state, $house, $party, $ratings, $comments)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->state    = $state;
        $this->house    = $house;
        $this->party    = $party;
        $this->ratings  = $ratings;
        $this->comments = $comments;
    }
}
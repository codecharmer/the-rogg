<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianListViewModel
{
    public $name;
    public $state;
    public $house;
    public $party;

    public function __construct($name, $state, $house, $party)
    {

        $this->name  = $name;
        $this->state = $state;
        $this->house = $house;
        $this->party = $party;
    }
}
<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianListModel
{
    public $id;
    public $name;
    public $state;
    public $house;
    public $party;

    public function __construct($id, $name, $state, $house, $party)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->state = $state;
        $this->house = $house;
        $this->party = $party;
    }
}
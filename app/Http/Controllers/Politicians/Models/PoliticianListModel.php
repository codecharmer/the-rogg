<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianListModel
{
    public $id;
    public $name;
    public $state;
    public $office;
    public $party;
    public $isPresidentialCandidate;
    public $photo;
    public $district;

    public function __construct($id, $name, $state, $office, $party, $isPresidentialCandidate, $photo, $district)
    {
        $this->id                      = $id;
        $this->name                    = $name;
        $this->state                   = $state;
        $this->office                  = $office;
        $this->party                   = $party;
        $this->isPresidentialCandidate = $isPresidentialCandidate;
        $this->photo                   = $photo;
        $this->district                = $district;
    }
}
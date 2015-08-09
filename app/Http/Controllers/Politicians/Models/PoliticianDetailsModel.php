<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class AdminPoliticianDetailsModel
{
    public $id;
    public $name;
    public $state;
    public $office;
    public $party;

    public function __construct($id, $name, $state, $office, $party)
    {
        $this->id     = $id;
        $this->name   = $name;
        $this->state  = $state;
        $this->office = $office;
        $this->party  = $party;
    }
}
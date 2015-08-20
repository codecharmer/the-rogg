<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianModel
{
    public $id;
    public $name;
    public $photo;
    public $bio;
    public $office;
    public $party;
    public $state;
    public $district;
    public $slug;

    public function __construct($id, $name, $office, $party, $state, $photo, $bio, $district, $slug)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->photo    = $photo;
        $this->bio      = $bio;
        $this->office   = $office;
        $this->party    = $party;
        $this->state    = $state;
        $this->district = $district;
        $this->slug     = $slug;
    }
}
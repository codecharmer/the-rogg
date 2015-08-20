<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianDetailModel
{
    public $id;
    public $name;
    public $photo;
    public $bio;

    public function __construct($id, $name, $photo, $bio)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->photo = $photo;
        $this->bio   = $bio;
    }
}
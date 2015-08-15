<?php

namespace TheRogg\Http\ViewComposers\Home\Models;

class HomePoliticianModel
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
}
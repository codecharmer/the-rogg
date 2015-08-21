<?php

namespace TheRogg\Http\ViewComposers\Home\Models;

class HomePoliticianModel
{
    public $id;
    public $name;
    public $slug;

    public function __construct($id, $name, $slug)
    {
        $this->id   = $id;
        $this->name = $name;
        $this->slug = $slug;
    }
}
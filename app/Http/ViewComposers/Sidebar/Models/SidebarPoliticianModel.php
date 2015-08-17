<?php

namespace TheRogg\Http\ViewComposers\Sidebar\Models;

class SidebarPoliticianModel
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
}
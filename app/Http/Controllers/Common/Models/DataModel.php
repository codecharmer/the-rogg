<?php

namespace TheRogg\Http\Controllers\Common\Models;

class DataModel
{
    public $states;
    public $parties;
    public $offices;

    public function __construct($states, $parties, $offices)
    {
        $this->states  = $states;
        $this->parties = $parties;
        $this->offices = $offices;
    }
}
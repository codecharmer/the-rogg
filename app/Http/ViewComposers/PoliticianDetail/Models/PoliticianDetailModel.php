<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianDetailModel
{
    public $politician;

    public function __construct($politician)
    {
        $this->politician = $politician;
    }
}
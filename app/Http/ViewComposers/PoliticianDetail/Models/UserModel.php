<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class UserModel
{
    public $id;
    public $username;
    public $photo;

    public function __construct($id, $username, $photo)
    {
        $this->id       = $id;
        $this->username = $username;
        $this->photo    = $photo;
    }
}
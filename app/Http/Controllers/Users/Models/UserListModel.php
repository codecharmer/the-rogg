<?php

namespace TheRogg\Http\Controllers\Users\Models;

class UserListModel
{
    public $id;
    public $name;
    public $email;
    public $party;

    public function __construct($id, $name, $email, $party)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->email = $email;
        $this->party = $party;
    }
}
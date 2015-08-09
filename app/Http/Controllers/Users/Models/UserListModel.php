<?php

namespace TheRogg\Http\Controllers\Users\Models;

class UserListModel
{
    public $id;
    public $username;
    public $email;
    public $party;

    public function __construct($id, $username, $email, $party)
    {
        $this->id       = $id;
        $this->username = $username;
        $this->email    = $email;
        $this->party    = $party;
    }
}
<?php

namespace TheRogg\Http\Controllers\Users\Models;

class AdminUserListModel
{
    public $id;
    public $username;
    public $email;
    public $party;
    public $isAdmin;

    public function __construct($id, $username, $email, $party, $isAdmin)
    {
        $this->id       = $id;
        $this->username = $username;
        $this->email    = $email;
        $this->party    = $party;
        $this->isAdmin  = $isAdmin;
    }
}
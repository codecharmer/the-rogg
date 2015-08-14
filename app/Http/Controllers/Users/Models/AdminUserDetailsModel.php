<?php

namespace TheRogg\Http\Controllers\Users\Models;

class AdminUserDetailsModel
{
    public  $id;
    public  $username;
    public  $email;
    public  $party;
    public  $isAdmin;
    private $photo;

    public function __construct($id, $username, $email, $party, $isAdmin, $photo)
    {
        $this->id       = $id;
        $this->username = $username;
        $this->email    = $email;
        $this->party    = $party;
        $this->isAdmin  = $isAdmin;
        $this->photo    = $photo;
    }
}
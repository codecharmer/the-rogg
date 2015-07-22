<?php

namespace TheRogg\Domain;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $collection = 'users';

    protected $hidden = ['password', 'remember_token'];

    public function getEmail() { return $this->attributes['email']; }
    public function setEmail($email) { $this->attributes['email'] = $email; }

    public function getName() { return $this->attributes['name']; }
    public function setName($name) { $this->attributes['name'] = $name; }

    public function getPassword() { return $this->attributes['password']; }
    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }
}

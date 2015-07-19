<?php

namespace TheRogg\Domain;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Jenssegers\Mongodb\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $collection = 'users';

    protected $hidden = ['password', 'remember_token'];

    public function setEmail($email) { $this->attributes['email'] = $email; }
    public function getEmail() { return $this->attributes['email']; }

    public function setName($name) { $this->attributes['name'] = $name; }
    public function getName() { return $this->attributes['name']; }

    public function setPassword($password) { $this->attributes['password'] = $password; }
    public function getPassword() { return $this->attributes['password']; }
}

<?php

namespace TheRogg\Domain;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use InvalidArgumentException;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $collection = 'users';

    protected $hidden = ['password', 'remember_token'];

    public function getEmail() { return $this->attributes['email']; }
    public function setEmail($email)
    {
        if ($this->stringIsNullOrEmpty($email))
            throw new InvalidArgumentException('Email cannot be empty.');

        $this->attributes['email'] = $email;
    }

    public function getName() { return $this->attributes['name']; }
    public function setName($name)
    {
        if ($this->stringIsNullOrEmpty($name))
            throw new InvalidArgumentException('Name cannot be empty.');

        $this->attributes['name'] = $name;
    }

    public function getPassword() { return $this->attributes['password']; }
    public function setPassword($password)
    {
        if ($this->stringIsNullOrEmpty($password))
            throw new InvalidArgumentException('Password cannot be empty.');

        $this->attributes['password'] = $password;
    }
}

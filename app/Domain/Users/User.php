<?php

namespace TheRogg\Domain;

use Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use InvalidArgumentException;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /** @var  Party */
    protected $party;
    /** @var  string */
    protected $username;

    protected $hidden = ['password', 'remember_token'];

    protected $attributes = [
        'party' => null,
    ];

    public function getUsername() { return $this->attributes['username']; }
    public function setUsername($username)
    {
        if ($this->stringIsNullOrEmpty($username))
            throw new InvalidArgumentException('Username cannot be empty.');

        $this->attributes['name'] = $username;
    }

    public function getEmail() { return $this->attributes['email']; }
    public function setEmail($email)
    {
        if ($this->stringIsNullOrEmpty($email))
            throw new InvalidArgumentException('Email cannot be empty.');

        $this->attributes['email'] = $email;
    }

    public function getPassword() { return $this->attributes['password']; }
    public function setPassword($password)
    {
        if ($this->stringIsNullOrEmpty($password))
            throw new InvalidArgumentException('Password cannot be empty.');

        $this->attributes['password'] = Hash::make($password);
    }

    public function getParty() { return $this->attributes['party']; }
    public function setParty($party)
    {
        if (!Party::isValidValue($party))
            throw new InvalidArgumentException($party . ' is not a valid political party.');

        $this->attributes['party'] = $party;
    }
}

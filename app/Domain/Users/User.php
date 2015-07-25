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

    protected $hidden = ['password', 'remember_token'];

    protected $attributes = [
        'party' => null,
    ];

    public function getName() { return $this->attributes['name']; }
    public function setName($name)
    {
        if ($this->stringIsNullOrEmpty($name))
            throw new InvalidArgumentException('Name cannot be empty.');

        $this->attributes['name'] = $name;
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

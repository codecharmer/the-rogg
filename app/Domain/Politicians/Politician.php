<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Politician extends Entity
{
    /** @var  string */
    protected $name;
    /** @var  State */
    protected $state;
    /** @var  Office */
    protected $office;
    /** @var  Party */
    protected $party;
    /** @var  Comment[] */
    protected $comments;
    /** @var  string */
    protected $picture;
    /** @var  string */
    protected $message;

    protected $attributes = [
        'comments' => [],
    ];

    public function getName() { return $this->attributes['name']; }
    public function setName($name)
    {
        if ($this->stringIsNullOrEmpty($name))
            throw new InvalidArgumentException('Name cannot be empty.');

        $this->attributes['name'] = $name;
    }

    public function getState() { return $this->attributes['state']; }
    public function setState($state)
    {
        if (!State::isValidValue($state))
            throw new InvalidArgumentException($state . ' is not a valid state.');

        $this->attributes['state'] = $state;
    }

    public function getOffice() { return $this->attributes['office']; }
    public function setOffice($office)
    {
        if (!Office::isValidValue($office))
            throw new InvalidArgumentException($office . ' is not a valid political office.');

        $this->attributes['office'] = $office;
    }

    public function getParty() { return $this->attributes['party']; }
    public function setParty($party)
    {
        if (!Party::isValidValue($party))
            throw new InvalidArgumentException($party . ' is not a valid political party.');

        $this->attributes['party'] = $party;
    }

    public function getPicture() { return $this->attributes['picture']; }
    public function setPicture($picture)
    {
        if ($this->stringIsNullOrEmpty($picture))
            throw new InvalidArgumentException('Picture cannot be empty.');

        $this->attributes['picture'] = $picture;
    }

    public function getMessage() { return $this->attributes['message']; }
    public function setMessage($message)
    {
        if ($this->stringIsNullOrEmpty($message))
            throw new InvalidArgumentException('Message cannot be empty.');

        $this->attributes['message'] = $message;
    }

    public function getComments() { return $this->attributes['comments']; }
}
<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Politician extends Entity
{
    /** @var  string */
    protected $name;
    /** @var  House */
    protected $house;
    /** @var  string */
    protected $state;
    /** @var  string */
    protected $picture;
    /** @var  string */
    protected $message;
    /** @var  Party */
    protected $party;
    /** @var  Rating[] */
    protected $ratings;
    /** @var  Comment[] */
    protected $comments;

    public function getName() { return $this->attributes['name']; }
    public function setName($name)
    {
        if ($this->stringIsNullOrEmpty($name))
            throw new InvalidArgumentException('Name cannot be empty.');

        $this->attributes['name'] = $name;
    }

    public function getHouse() { return $this->attributes['house']; }
    public function setHouse(House $house)
    {
        $this->attributes['house'] = $house;
    }

    // TODO: Should this be an enum? Probably.
    public function getState() { return $this->attributes['state']; }
    public function setState($state)
    {
        if ($this->stringIsNullOrEmpty($state))
            throw new InvalidArgumentException('State cannot be empty.');

        $this->attributes['state'] = $state;
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

    public function getParty() { return $this->attributes['party']; }
    public function setParty(Party $party)
    {
        $this->attributes['party'] = $party;
    }

    // TODO: Ratings
    // TODO: Comments
}
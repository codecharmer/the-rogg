<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Politician extends Entity
{
    /** @var  string */
    protected $name;
    /** @var  State */
    protected $state;
    /** @var  House */
    protected $house;
    /** @var  Party */
    protected $party;
    /** @var  Rating[] */
    protected $ratings;
    /** @var  Comment[] */
    protected $comments;
    /** @var  string */
    protected $picture;
    /** @var  string */
    protected $message;

    protected $attributes = [
        'ratings'  => [],
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

    public function getHouse() { return $this->attributes['house']; }
    public function setHouse($house)
    {
        if (!House::isValidValue($house))
            throw new InvalidArgumentException($house . ' is not a valid house of Congress.');

        $this->attributes['house'] = $house;
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

    public function getRatings() { return $this->attributes['ratings']; }
    public function addRating($rating)
    {
        $this->attributes['ratings'][] = $rating;
    }

    public function getComments() { return $this->attributes['comments']; }
}
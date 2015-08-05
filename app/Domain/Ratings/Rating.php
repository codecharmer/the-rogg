<?php

namespace TheRogg\Domain;

use InvalidArgumentException;
use TheRogg\Domain\Politicians\Amendment;

class Rating extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var  string */
    protected $politicianId;
    /** @var int[] */
    protected $ratings;

    public function getUserId() { return $this->attributes['userId']; }
    public function setUserId($userId)
    {
        if ($this->stringIsNullOrEmpty($userId))
            throw new InvalidArgumentException('User ID cannot be empty.');

        $this->attributes['userId'] = $userId;
    }

    public function getPoliticianId() { return $this->attributes['politicianId']; }
    public function setPoliticianId($politicianId)
    {
        if ($this->stringIsNullOrEmpty($politicianId))
            throw new InvalidArgumentException('Politician ID cannot be empty.');

        $this->attributes['politicianId'] = $politicianId;
    }

    public function setRating($amendment, $rating)
    {
        if (!Amendment::isValidValue($amendment))
            throw new InvalidArgumentException($amendment . ' is not a valid Amendment.');

        if (!$this->isValidRating($rating))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['ratings'][$amendment] = $rating;
    }

    public function setRatings($ratings)
    {
        if (count($ratings) != 10)
            throw new InvalidArgumentException('Ten ratings must be passed in.');

        $this->setRating(Amendment::First, $ratings['First']);
        $this->setRating(Amendment::Second, $ratings['Second']);
        $this->setRating(Amendment::Third, $ratings['Third']);
        $this->setRating(Amendment::Fourth, $ratings['Fourth']);
        $this->setRating(Amendment::Fifth, $ratings['Fifth']);
        $this->setRating(Amendment::Sixth, $ratings['Sixth']);
        $this->setRating(Amendment::Seventh, $ratings['Seventh']);
        $this->setRating(Amendment::Eighth, $ratings['Eighth']);
        $this->setRating(Amendment::Ninth, $ratings['Ninth']);
        $this->setRating(Amendment::Tenth, $ratings['Tenth']);
    }

    public function getAverageRating()
    {
        $total = 0;
        foreach ($this->attributes['ratings'] as $rating)
            $total += $rating;

        $average = $total / 10;

        return $average;
    }

    private function isValidRating($number)
    {
        return is_int($number) && $number >= 1 && $number <= 5;
    }
}

<?php

namespace TheRogg\Domain;

use InvalidArgumentException;
use TheRogg\Domain\Politicians\Amendment;

class Rating extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var int[] */
    protected $ratings;

    public function getUserId() { return $this->attributes['userId']; }
    public function setUserId($userId)
    {
        if ($this->stringIsNullOrEmpty($userId))
            throw new InvalidArgumentException('User ID cannot be empty.');

        $this->attributes['userId'] = $userId;
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

        $this->setRating(Amendment::First, $ratings[0]);
        $this->setRating(Amendment::Second, $ratings[1]);
        $this->setRating(Amendment::Third, $ratings[2]);
        $this->setRating(Amendment::Fourth, $ratings[3]);
        $this->setRating(Amendment::Fifth, $ratings[4]);
        $this->setRating(Amendment::Sixth, $ratings[5]);
        $this->setRating(Amendment::Seventh, $ratings[6]);
        $this->setRating(Amendment::Eighth, $ratings[7]);
        $this->setRating(Amendment::Ninth, $ratings[8]);
        $this->setRating(Amendment::Tenth, $ratings[9]);
    }

    private function isValidRating($number)
    {
        return is_int($number) && $number >= 1 && $number <= 5;
    }
}

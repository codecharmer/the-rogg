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

    private function isValidRating($number)
    {
        return is_int($number) && $number >= 1 && $number <= 5;
    }
}

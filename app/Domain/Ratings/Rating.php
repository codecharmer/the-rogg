<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Rating extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var  int */
    protected $firstAmendment;
    /** @var  int */
    protected $secondAmendment;
    /** @var  int */
    protected $thirdAmendment;
    /** @var  int */
    protected $fourthAmendment;
    /** @var  int */
    protected $fifthAmendment;
    /** @var  int */
    protected $sixthAmendment;
    /** @var  int */
    protected $seventhAmendment;
    /** @var  int */
    protected $eighthAmendment;
    /** @var  int */
    protected $ninthAmendment;
    /** @var  int */
    protected $tenthAmendment;

    public function getUserId() { return $this->attributes['userId']; }
    public function setUserId($userId)
    {
        if ($this->stringIsNullOrEmpty($userId))
            throw new InvalidArgumentException('User ID cannot be empty.');

        $this->attributes['userId'] = $userId;
    }

    public function getFirstAmendment() { return $this->attributes['firstAmendment']; }
    public function setFirstAmendment($firstAmendment)
    {
        if (!$this->isValidRating($firstAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['firstAmendment'] = $firstAmendment;
    }

    public function getSecondAmendment() { return $this->attributes['secondAmendment']; }
    public function setSecondAmendment($secondAmendment)
    {
        if (!$this->isValidRating($secondAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['secondAmendment'] = $secondAmendment;
    }

    private function isValidRating($number)
    {
        return is_int($number) || $number >= 1 || $number <= 5;
    }
}

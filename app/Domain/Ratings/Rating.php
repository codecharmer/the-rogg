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

    public function getThirdAmendment() { return $this->attributes['thirdAmendment']; }
    public function setThirdAmendment($thirdAmendment)
    {
        if (!$this->isValidRating($thirdAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['thirdAmendment'] = $thirdAmendment;
    }

    public function getFourthAmendment() { return $this->attributes['fourthAmendment']; }
    public function setFourthAmendment($fourthAmendment)
    {
        if (!$this->isValidRating($fourthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['fourthAmendment'] = $fourthAmendment;
    }

    public function getFifthAmendment() { return $this->attributes['fifthAmendment']; }
    public function setFifthAmendment($fifthAmendment)
    {
        if (!$this->isValidRating($fifthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['fifthAmendment'] = $fifthAmendment;
    }

    public function getSixthAmendment() { return $this->attributes['sixthAmendment']; }
    public function setSixthAmendment($sixthAmendment)
    {
        if (!$this->isValidRating($sixthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['sixthAmendment'] = $sixthAmendment;
    }

    public function getSeventhAmendment() { return $this->attributes['seventhAmendment']; }
    public function setSeventhAmendment($seventhAmendment)
    {
        if (!$this->isValidRating($seventhAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['seventhAmendment'] = $seventhAmendment;
    }

    public function getEighthAmendment() { return $this->attributes['eighthAmendment']; }
    public function setEighthAmendment($eighthAmendment)
    {
        if (!$this->isValidRating($eighthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['eighthAmendment'] = $eighthAmendment;
    }

    public function getNinthAmendment() { return $this->attributes['ninthAmendment']; }
    public function setNinthAmendment($ninthAmendment)
    {
        if (!$this->isValidRating($ninthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['ninthAmendment'] = $ninthAmendment;
    }

    public function getTenthAmendment() { return $this->attributes['tenthAmendment']; }
    public function setTenthAmendment($tenthAmendment)
    {
        if (!$this->isValidRating($tenthAmendment))
            throw new InvalidArgumentException('Rating must be a number between 1 and 5.');

        $this->attributes['tenthAmendment'] = $tenthAmendment;
    }

    private function isValidRating($number)
    {
        return is_int($number) && $number >= 1 && $number <= 5;
    }
}

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
    /** @var  string|null */
    protected $photo;
    /** @var  string|null */
    protected $message;
    /** @var  bool */
    protected $isPresidentialCandidate;
    /** @var string */
    protected $district;

    protected $attributes = [
        'photo'                   => null,
        'message'                 => null,
        'isPresidentialCandidate' => false,
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
        if ($this->stringIsNullOrEmpty($state))
            throw new InvalidArgumentException('State cannot be empty.');

        if (!State::isValidValue($state))
            throw new InvalidArgumentException($state . ' is not a valid state.');

        $this->attributes['state'] = $state;
    }

    public function getOffice() { return $this->attributes['office']; }
    public function setOffice($office)
    {
        if ($this->stringIsNullOrEmpty($office))
            throw new InvalidArgumentException('Office cannot be empty.');

        if (!Office::isValidValue($office))
            throw new InvalidArgumentException($office . ' is not a valid political office.');

        $this->attributes['office'] = $office;
    }

    public function getParty() { return $this->attributes['party']; }
    public function setParty($party)
    {
        if ($this->stringIsNullOrEmpty($party))
            throw new InvalidArgumentException('Party cannot be empty.');

        if (!Party::isValidValue($party))
            throw new InvalidArgumentException($party . ' is not a valid political party.');

        $this->attributes['party'] = $party;
    }

    public function getPhoto() { return $this->attributes['photo']; }
    public function setPhoto($photo)
    {
        if (!is_string($photo) && $photo != null)
            throw new InvalidArgumentException('Photo must be a string or null.');

        $this->attributes['photo'] = $photo;
    }

    public function getMessage() { return $this->attributes['message']; }
    public function setMessage($message)
    {
        if (!is_string($message) && $message != null)
            throw new InvalidArgumentException('Message must be a string or null.');

        $this->attributes['message'] = $message;
    }

    public function IsPresidentialCandidate() { return $this->attributes['isPresidentialCandidate']; }
    public function setIsPresidentialCandidate($isPresidentialCandidate)
    {
        $this->attributes['isPresidentialCandidate'] = $isPresidentialCandidate;
    }

    public function getDistrict() { return $this->attributes['district']; }
    public function setDistrict($district)
    {
        $this->attributes['district'] = $district;
    }
}
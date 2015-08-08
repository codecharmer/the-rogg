<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Comment extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var  string */
    protected $politicianId;
    /** @var  string */
    protected $text;

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

    public function getText() { return $this->attributes['text']; }
    public function setText($text)
    {
        if ($this->stringIsNullOrEmpty($text))
            throw new InvalidArgumentException('Comment cannot be empty.');

        $this->attributes['text'] = $text;
    }

    public function getTimestamp() { return $this->updated_at->getTimestamp(); }
}
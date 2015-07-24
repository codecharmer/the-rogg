<?php

namespace TheRogg\Domain;

use InvalidArgumentException;

class Comment extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var  string */
    protected $text;

    public function __construct($userId, $text, $attributes = [])
    {
        parent::__construct($attributes);

        $this->setUserId($userId);
        $this->setText($text);
    }

    public function getUserId() { return $this->attributes['userId']; }
    public function setUserId($userId)
    {
        if ($this->stringIsNullOrEmpty($userId))
            throw new InvalidArgumentException('User ID cannot be empty.');

        $this->attributes['userId'] = $userId;
    }

    public function getText() { return $this->attributes['text']; }
    public function setText($text)
    {
        if ($this->stringIsNullOrEmpty($text))
            throw new InvalidArgumentException('Text cannot be empty.');

        $this->attributes['text'] = $text;
    }
}
<?php

namespace TheRogg\Domain;

use InvalidArgumentException;
use TheRogg\Domain\Politicians\Amendment;

class PoliticianReview extends Entity
{
    /** @var  string */
    protected $userId;
    /** @var  string */
    protected $politicianId;
    /** @var int[] */
    protected $scores;
    /** @var string */
    protected $comment;

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

    public function getScores() { return $this->attributes['scores']; }

    public function setScore($amendment, $score)
    {
        if (!Amendment::isValidValue($amendment))
            throw new InvalidArgumentException($amendment . ' is not a valid Amendment.');

        if (!$this->isValidScore($score))
            throw new InvalidArgumentException('Score must be a number between 1 and 5.');

        $this->attributes['scores'][$amendment] = $score;
    }

    public function setScores($scores)
    {
        if (count($scores) != 10)
            throw new InvalidArgumentException('Ten ratings must be passed in.');

        $this->setScore(Amendment::First, $scores['First']);
        $this->setScore(Amendment::Second, $scores['Second']);
        $this->setScore(Amendment::Third, $scores['Third']);
        $this->setScore(Amendment::Fourth, $scores['Fourth']);
        $this->setScore(Amendment::Fifth, $scores['Fifth']);
        $this->setScore(Amendment::Sixth, $scores['Sixth']);
        $this->setScore(Amendment::Seventh, $scores['Seventh']);
        $this->setScore(Amendment::Eighth, $scores['Eighth']);
        $this->setScore(Amendment::Ninth, $scores['Ninth']);
        $this->setScore(Amendment::Tenth, $scores['Tenth']);
    }

    public function getAverageScore()
    {
        $total = 0;
        foreach ($this->attributes['scores'] as $score)
            $total += $score;

        $average = round($total / 10);

        return $average;
    }

    public function getComment() { return $this->attributes['comment']; }
    public function setComment($comment)
    {
        $this->attributes['comment'] = $comment;
    }

    public function getUpdatedAt()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        return $this->updated_at;
    }

    private function isValidScore($number)
    {
        return is_int($number) && $number >= 1 && $number <= 5;
    }
}

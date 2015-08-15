<?php

namespace TheRogg\Http\ViewComposers\Home;

class PoliticianReviewModel
{
    public $user;
    public $politician;
    public $rating;
    public $comment;
    public $timestamp;

    public function __construct($user, $politician, $rating, $comment, $timestamp)
    {
        $this->user       = $user;
        $this->politician = $politician;
        $this->rating     = $rating;
        $this->comment    = $comment;
        $this->timestamp  = $timestamp;
    }
}
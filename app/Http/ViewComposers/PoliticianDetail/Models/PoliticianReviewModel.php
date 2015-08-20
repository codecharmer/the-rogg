<?php

namespace TheRogg\Http\ViewComposers\PoliticianDetail\Models;

class PoliticianReviewModel
{
    public $user;
    public $rating;
    public $comment;
    public $timestamp;

    public function __construct($user, $rating, $comment, $timestamp)
    {
        $this->user      = $user;
        $this->rating    = $rating;
        $this->comment   = $comment;
        $this->timestamp = $timestamp;
    }
}
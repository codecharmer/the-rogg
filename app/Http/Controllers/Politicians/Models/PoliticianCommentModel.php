<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianCommentModel
{
    public $userId;
    public $text;
    public $timestamp;

    public function __construct($userId, $text, $timestamp)
    {
        $this->userId    = $userId;
        $this->text      = $text;
        $this->timestamp = $timestamp;
    }
}
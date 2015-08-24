<?php

namespace TheRogg\Http\Controllers\Politicians\Models;

class PoliticianReviewModel
{
    public $id;
    public $scores;
    public $comment;
    
    public function __construct($id, $scores, $comment)
    {
        $this->id      = $id;
        $this->scores  = $scores;
        $this->comment = $comment;
    }
}
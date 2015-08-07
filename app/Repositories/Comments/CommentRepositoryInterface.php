<?php

namespace TheRogg\Repositories\Comments;

use TheRogg\Domain\Comment;
use TheRogg\Repositories\RepositoryInterface;

interface CommentRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $userId
     * @param string      $politicianId
     * @param string      $text
     * @param string|null $id
     *
     * @return Comment
     */
    public function make($userId, $politicianId, $text, $id = null);
}
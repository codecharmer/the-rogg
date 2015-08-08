<?php

namespace TheRogg\Repositories\Comments;

use InvalidArgumentException;
use TheRogg\Domain\Comment;

class EloquentCommentRepository implements CommentRepositoryInterface
{
    public function make($userId, $politicianId, $text, $id = null)
    {
        $comment = new Comment();

        try
        {
            if (!empty($id))
                $comment->setId($id);

            $comment->setUserId($userId);
            $comment->setPoliticianId($politicianId);
            $comment->setText($text);
            $comment->save();

            return $comment;
        }
        catch (InvalidArgumentException $e)
        {
            $comment->delete();
            throw $e;
        }
    }

    public function getAll($fields = [])
    {
        $comments = Comment::all($fields);

        return $comments;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        Comment::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $comment = Comment::find($fields);

        return $comment;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $comment = Comment::where('field', $value)->project($fields)->first();

        return $comment;
    }

    public function getByPoliticianId($politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $comments = Comment::where('politicianId', $politicianId)->orderBy('updated_at')->get();

        return $comments;
    }
}
<?php

namespace TheRogg\Repositories\Ratings;

use TheRogg\Domain\Rating;

class EloquentRatingRepository implements RatingRepositoryInterface
{
    public function getAll($fields = [])
    {
        $ratings = Rating::all($fields);

        return $ratings;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        Rating::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = Rating::find($fields);

        return $rating;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = Rating::where('$field', $value)->project($fields)->first();

        return $rating;
    }

    public function make($userId)
    {
        $rating = new Rating();
        $rating->setUserId($userId);

        return $rating;
    }
}
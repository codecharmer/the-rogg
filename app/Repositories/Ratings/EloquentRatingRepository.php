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

    public function getByPoliticianId($politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $ratings = Rating::where('politicianId', $politicianId)->get();

        return $ratings;
    }

    public function findByUserAndPolitician($userId, $politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = Rating::where('userId', $userId)->where('politicianId', $politicianId)->first();

        return $rating;
    }

    public function make($userId, $politicianId, $id = null)
    {
        $rating = new Rating();

        if (!empty($id))
            $rating->setId($id);

        $rating->setUserId($userId);
        $rating->setPoliticianId($politicianId);
        $rating->save();

        return $rating;
    }
}
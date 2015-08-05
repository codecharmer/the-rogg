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

    public function findRatings($ids, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $ratings = Rating::whereIn('_id', $ids)->project($fields)->get();

        return $ratings;
    }

    public function make($userId, $politicianId)
    {
        $rating = new Rating();
        $rating->setUserId($userId);
        $rating->setPoliticianId($politicianId);
        $rating->save();

        return $rating;
    }
}
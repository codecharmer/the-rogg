<?php

namespace TheRogg\Repositories\Politicians;

use InvalidArgumentException;
use TheRogg\Domain\PoliticianRating;

class EloquentPoliticianRatingRepository implements PoliticianRatingRepositoryInterface
{
    public function getAll($fields = [])
    {
        $ratings = PoliticianRating::all($fields);

        return $ratings;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        PoliticianRating::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = PoliticianRating::find($fields);

        return $rating;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = PoliticianRating::where('$field', $value)->project($fields)->first();

        return $rating;
    }

    public function getByPoliticianId($politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $ratings = PoliticianRating::where('politicianId', $politicianId)->get();

        return $ratings;
    }

    public function findByUserAndPolitician($userId, $politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $rating = PoliticianRating::where('userId', $userId)->where('politicianId', $politicianId)->first();

        return $rating;
    }

    public function make($userId, $politicianId, $scores, $id = null)
    {
        $rating = new PoliticianRating();

        try
        {
            if (!empty($id))
                $rating->setId($id);

            $rating->setUserId($userId);
            $rating->setPoliticianId($politicianId);
            $rating->setScores($scores);
            $rating->save();

            return $rating;
        }
        catch (InvalidArgumentException $e)
        {
            $rating->delete();
            throw $e;
        }
    }
}
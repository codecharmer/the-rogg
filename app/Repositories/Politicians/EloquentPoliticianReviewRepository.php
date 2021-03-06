<?php

namespace TheRogg\Repositories\Politicians;

use InvalidArgumentException;
use TheRogg\Domain\PoliticianReview;

class EloquentPoliticianReviewRepository implements PoliticianReviewRepositoryInterface
{
    public function getAll($fields = [])
    {
        $reviews = PoliticianReview::all($fields);

        return $reviews;
    }

    public function get($count, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $reviews = PoliticianReview::orderBy('updated_at', 'desc')->project($fields)->take($count)->get();

        return $reviews;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        PoliticianReview::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $review = PoliticianReview::find($fields);

        return $review;
    }

    public function getRandom($fields = [])
    {
        $reviews      = PoliticianReview::all($fields);
        $rand         = rand(0, $reviews->count() - 1);
        $randomReview = $reviews->get($rand);

        return $randomReview;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $review = PoliticianReview::where('$field', $value)->project($fields)->first();

        return $review;
    }

    public function getByPoliticianId($politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $reviews = PoliticianReview::where('politicianId', $politicianId)->orderBy('updated_at', 'desc')->get();

        return $reviews;
    }

    public function findByUserAndPolitician($userId, $politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $review = PoliticianReview::where('userId', $userId)->where('politicianId', $politicianId)->first();

        return $review;
    }

    public function make($userId, $politicianId, $scores, $comment, $id = null)
    {
        $review = new PoliticianReview();

        try
        {
            if (!empty($id))
                $review->setId($id);

            $review->setUserId($userId);
            $review->setPoliticianId($politicianId);
            $review->setScores($scores);
            $review->setComment($comment);
            $review->save();

            return $review;
        }
        catch (InvalidArgumentException $e)
        {
            $review->delete();
            throw $e;
        }
    }

    public function getTopReviewsByAmendment($amendment)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $reviews = PoliticianReview::where("scores.{$amendment}", '>', 3)->orderBy('updated_at', 'desc')->take(3)->get();

        return $reviews;
    }
}
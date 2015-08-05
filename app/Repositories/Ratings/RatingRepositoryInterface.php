<?php

namespace TheRogg\Repositories\Ratings;

use TheRogg\Domain\Rating;
use TheRogg\Repositories\RepositoryInterface;

interface RatingRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     * @param string $politicianId
     *
     * @return Rating
     */
    public function make($userId, $politicianId);

    /**
     * @param string[] $ids
     * @param string[] $fields
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findRatings($ids, $fields = []);
}
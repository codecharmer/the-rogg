<?php

namespace TheRogg\Repositories\Ratings;

use TheRogg\Domain\Rating;
use TheRogg\Repositories\RepositoryInterface;

interface RatingRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $userId
     * @param string      $politicianId
     * @param string|null $id
     *
     * @return Rating
     */
    public function make($userId, $politicianId, $id = null);

    /**
     * @param string $politicianId
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByPoliticianId($politicianId);
}
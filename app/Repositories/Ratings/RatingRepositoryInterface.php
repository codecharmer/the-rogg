<?php

namespace TheRogg\Repositories\Ratings;

use TheRogg\Domain\Rating;
use TheRogg\Repositories\RepositoryInterface;

interface RatingRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $userId
     * @param string      $politicianId
     * @param int[]       $ratings
     * @param string|null $id
     *
     * @return Rating
     */
    public function make($userId, $politicianId, $ratings, $id = null);

    /**
     * @param string $politicianId
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByPoliticianId($politicianId);

    /**
     * @param string $userId
     * @param string $politicianId
     *
     * @return Rating|null
     */
    public function findByUserAndPolitician($userId, $politicianId);
}
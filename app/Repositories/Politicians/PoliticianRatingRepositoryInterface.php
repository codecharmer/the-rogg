<?php

namespace TheRogg\Repositories\Politicians;

use TheRogg\Domain\PoliticianRating;
use TheRogg\Repositories\RepositoryInterface;

interface PoliticianRatingRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $userId
     * @param string      $politicianId
     * @param int[]       $scores
     * @param string|null $id
     *
     * @return PoliticianRating
     */
    public function make($userId, $politicianId, $scores, $id = null);

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
     * @return PoliticianRating|null
     */
    public function findByUserAndPolitician($userId, $politicianId);
}
<?php

namespace TheRogg\Repositories\Politicians;

use TheRogg\Domain\PoliticianReview;
use TheRogg\Repositories\RepositoryInterface;

interface PoliticianReviewRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $userId
     * @param string      $politicianId
     * @param int[]       $scores
     * @param string      $comment
     * @param string|null $id
     *
     * @return PoliticianReview
     */
    public function make($userId, $politicianId, $scores, $comment, $id = null);

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
     * @return PoliticianReview|null
     */
    public function findByUserAndPolitician($userId, $politicianId);
}
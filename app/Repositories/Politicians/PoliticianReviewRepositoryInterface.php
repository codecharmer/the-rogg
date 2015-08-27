<?php

namespace TheRogg\Repositories\Politicians;

use Jenssegers\Mongodb\Eloquent\Collection;
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
     * @param int      $count
     * @param string[] $fields
     *
     * @return Collection
     */
    public function get($count, $fields = []);

    /**
     * @param string $politicianId
     *
     * @return Collection|static[]
     */
    public function getByPoliticianId($politicianId);

    /**
     * @param string $userId
     * @param string $politicianId
     *
     * @return PoliticianReview|null
     */
    public function findByUserAndPolitician($userId, $politicianId);

    /**
     * @param string[] $fields
     *
     * @return PoliticianReview
     */
    public function getRandom($fields = []);

    /**
     * @param string $amendment
     *
     * @return Collection
     */
    public function getTopReviewsByAmendment($amendment);
}
<?php

namespace TheRogg\Repositories\Politicians;

use TheRogg\Domain\Politician;
use TheRogg\Repositories\RepositoryInterface;

interface PoliticianRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $name
     * @param string      $state
     * @param string      $office
     * @param string      $party
     * @param string|null $district
     * @param string|null $bioGuideId
     * @param string|null $govTrackId
     * @param string|null $id
     *
     * @return Politician
     */
    public function make($name, $state, $office, $party, $district = null, $bioGuideId = null, $govTrackId = null, $id = null);

    /**
     * @param string $politicianId
     *
     * @return bool
     */
    public function isValidPolitician($politicianId);
}
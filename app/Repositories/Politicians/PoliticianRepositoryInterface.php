<?php

namespace TheRogg\Repositories\Politicians;

use TheRogg\Domain\Politician;
use TheRogg\Repositories\RepositoryInterface;

interface PoliticianRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $name
     * @param string $state
     * @param string $house
     * @param string $party
     *
     * @return Politician
     */
    public function make($name, $state, $house, $party);
}
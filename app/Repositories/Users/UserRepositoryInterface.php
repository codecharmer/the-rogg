<?php

namespace TheRogg\Repositories\Users;

use TheRogg\Domain\User;
use TheRogg\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     *
     * @return User
     */
    public function make($name, $email, $password);
}
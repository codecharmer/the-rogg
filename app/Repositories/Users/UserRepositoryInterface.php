<?php

namespace TheRogg\Repositories\Users;

use TheRogg\Domain\User;
use TheRogg\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string      $username
     * @param string      $email
     * @param string      $password
     * @param string|null $party
     * @param string|null $id
     *
     * @return User
     */
    public function make($username, $email, $password, $party = null, $id = null);

    /**
     * @param string $userId
     *
     * @return bool
     */
    public function isValidUser($userId);
}
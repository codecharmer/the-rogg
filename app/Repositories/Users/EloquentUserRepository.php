<?php

namespace TheRogg\Repositories\Users;

use TheRogg\Domain\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAll($fields = [])
    {
        $users = User::all($fields);

        return $users;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        User::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $user = User::find($id, $fields);

        return $user;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $user = User::where($field, $value)->project($fields)->first();

        return $user;
    }

    public function make($username, $email, $password, $confirmationCode, $party = null, $photo = null, $id = null)
    {
        $user = new User();

        if (!empty($id))
            $user->setId($id);

        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setConfirmationCode($confirmationCode);

        if (!empty($party))
            $user->setParty($party);

        if (!empty($photo))
            $user->setPhoto($photo);

        $user->save();

        return $user;
    }

    public function isValidUser($userId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $user = User::find($userId);

        return !empty($user);
    }
}
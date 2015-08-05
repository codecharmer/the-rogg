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

    public function make($name, $email, $password, $party = null, $id = null)
    {
        $user = new User();

        if (!empty($id))
            $user->setId($id);

        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);

        if (!empty($party))
            $user->setParty($party);

        $user->save();

        return $user;
    }
}
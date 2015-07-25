<?php

namespace TheRogg\Http\Controllers\Users;

use Request;
use Response;
use TheRogg\Domain\User;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Users\Models\UserDetailsModel;
use TheRogg\Http\Controllers\Users\Models\UserListModel;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class UserControllers extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getGetList()
    {
        $users  = $this->userRepo->getAll(['_id', 'name', 'email', 'party']);
        $models = [];

        /** @var User $user */
        foreach ($users as $user)
        {
            $model    = new UserListModel(
                $user->getId(),
                $user->getName(),
                $user->getEmail(),
                $user->getParty()
            );
            $models[] = $model;
        }

        return Response::json($models);
    }

    public function getGetUser()
    {
        $id = Request::get('id');

        /** @var User $user */
        $user = $this->userRepo->find($id);

        $model = new UserDetailsModel(
            $user->getId(),
            $user->getName(),
            $user->getEmail(),
            $user->getParty()
        );

        return Response::json($model);
    }
}
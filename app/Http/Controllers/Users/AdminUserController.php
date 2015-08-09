<?php

namespace TheRogg\Http\Controllers\Users;

use Exception;
use Request;
use Response;
use TheRogg\Domain\User;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Http\Controllers\Users\Models\AdminUserDetailsModel;
use TheRogg\Http\Controllers\Users\Models\AdminUserListModel;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class AdminUserController extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getGetList()
    {
        $users  = $this->userRepo->getAll(['_id', 'username', 'email', 'party', 'isAdmin']);
        $models = [];

        /** @var User $user */
        foreach ($users as $user)
        {
            $model    = new AdminUserListModel(
                $user->getId(),
                $user->getUsername(),
                $user->getEmail(),
                $user->getParty(),
                $user->isAdmin()
            );
            $models[] = $model;
        }

        return Response::json($models);
    }

    public function getGetDetails()
    {
        $id = Request::get('id');

        /** @var User $user */
        $user = $this->userRepo->find($id);

        $model = new AdminUserDetailsModel(
            $user->getId(),
            $user->getUsername(),
            $user->getEmail(),
            $user->getParty(),
            $user->isAdmin()
        );

        return Response::json($model);
    }

    public function postAddUser()
    {
        $model    = Request::json();
        $username = $model->get('username');
        $email    = $model->get('email');
        $password = $model->get('password');
        $party    = $model->get('party') ? $model->get('party') : null;
        $isAdmin  = $model->get('isAdmin');

        $user = $this->userRepo->findBy('username', $username);
        if (!empty($user))
            throw new Exception($username . ' already exists.');

        try
        {
            $user = $this->userRepo->make($username, $email, $password, $party);
            if ($isAdmin)
            {
                $user->makeAdmin();
                $this->userRepo->save($user);
            }

            return Response::json($user->getId());
        }
        catch (Exception $e)
        {
            $this->userRepo->delete($user->getId());
            throw $e;
        }
    }
}
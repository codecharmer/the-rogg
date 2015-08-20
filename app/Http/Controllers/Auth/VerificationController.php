<?php

namespace TheRogg\Http\Controllers\Auth;

use InvalidArgumentException;
use Redirect;
use Session;
use TheRogg\Domain\User;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;

class VerificationController extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getConfirm($confirmationCode)
    {
        if (!$confirmationCode)
            throw new InvalidArgumentException('You must submit a confirmation code.');

        /** @var User $user */
        $user = $this->userRepo->findBy('confirmationCode', $confirmationCode);

        if (!$user)
            throw new InvalidArgumentException('The confirmation code was invalid.');

        $user->Confirm();
        $user->setConfirmationCode(null);
        $this->userRepo->save($user);

        Session::flash('message', 'You have successfully verified your account.');

        return Redirect::to('/');
    }
}
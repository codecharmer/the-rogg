<?php

namespace TheRogg\Http\Controllers\Common;

use Response;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Http\Controllers\Controller;

class DataController extends Controller
{
    public function getGetStates()
    {
        $states = State::getConstants();

        return Response::json($states);
    }

    public function getGetParties()
    {
        $parties = Party::getConstants();

        return Response::json($parties);
    }
}
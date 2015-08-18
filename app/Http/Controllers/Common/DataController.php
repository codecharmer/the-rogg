<?php

namespace TheRogg\Http\Controllers\Common;

use Response;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Http\Controllers\Common\Models\DataModel;
use TheRogg\Http\Controllers\Controller;

class DataController extends Controller
{
    public function getGetAll()
    {
        $states  = State::getConstants();
        $parties = Party::getConstants();
        $offices = Office::getConstants();

        $model = new DataModel($states, $parties, $offices);

        return Response::json($model);
    }
}
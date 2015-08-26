<?php

namespace TheRogg\Http\ViewComposers\Auth;

use Illuminate\Contracts\View\View;
use TheRogg\Domain\Party;

class RegisterComposer
{
    public function compose(View $view)
    {
        $parties = Party::getConstants();

        $view->with(['parties' => $parties]);
    }
}
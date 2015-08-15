<?php

namespace TheRogg\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
            'home', 'TheRogg\Http\ViewComposers\Home\HomeComposer'
        );
    }

    public function register()
    {
        //
    }
}
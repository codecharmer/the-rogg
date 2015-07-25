<?php

namespace TheRogg\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** @noinspection PhpMethodParametersCountMismatchInspection */
        if ($this->app->environment('local'))
            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');

        $this->app->bind(
            'TheRogg\Repositories\Politicians\PoliticianRepositoryInterface',
            'TheRogg\Repositories\Politicians\EloquentPoliticianRepository'
        );

        $this->app->bind(
            'TheRogg\Repositories\Ratings\RatingRepositoryInterface',
            'TheRogg\Repositories\Ratings\EloquentRatingRepository'
        );

        $this->app->bind(
            'TheRogg\Repositories\Users\UserRepositoryInterface',
            'TheRogg\Repositories\Users\EloquentUserRepository'
        );
    }
}

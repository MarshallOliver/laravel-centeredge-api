<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use Illuminate\Support\ServiceProvider;

class LaravelCenterEdgeAPIProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('api', Middleware\SanitizeFilters::class);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}

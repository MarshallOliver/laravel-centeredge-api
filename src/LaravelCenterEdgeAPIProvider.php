<?php

namespace AIKG\LaravelCenterEdgeAPI;

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
        $router = $this->app->make(\Illuminate\Routing\Router::class);
        // $router->aliasMiddleware('laravel-centeredge-api.construct.filters', \AIKG\LaravelCenterEdgeAPI\Middleware\SanitizeFilters::class);
        $this->loadRoutesFrom(__DIR__.'/Routes/routes.php');
    }
}

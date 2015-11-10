<?php

namespace Spinen\Geometry;

use Illuminate\Support\ServiceProvider;

/**
 * Class GeometryServiceProvider
 *
 * @package Spinen\Geometry
 */
class GeometryServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('geometry', function ($app) {
            return $app->make(Geometry::class);
        });
    }
}
<?php

namespace Database;

/**
 * Class ServiceProvider
 * @package Database
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SeedDatabase::class, function () {
            return SeedDatabase::class;
        });
    }
}
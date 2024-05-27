<?php

namespace Akis\DC;

use Illuminate\Support\ServiceProvider;

class DcServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dc');

        $this->publishes([
            __DIR__ . '/../config/dc.php' => config_path('dc.php'),
        ], 'config');
    }

    public function register()
    {
    }
}

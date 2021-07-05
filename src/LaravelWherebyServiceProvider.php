<?php

namespace Kraenkvisuell\LaravelWhereby;

use Illuminate\Support\ServiceProvider;

class LaravelWherebyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/whereby.php' => config_path('whereby.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/whereby.php', 'whereby');

        $this->app->singleton('laravel-whereby', function () {
            return new LaravelWhereby;
        });
    }
}

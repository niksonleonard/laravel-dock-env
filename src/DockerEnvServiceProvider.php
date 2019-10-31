<?php

namespace i9dea\DockerEnv;

use Illuminate\Support\ServiceProvider;


class DockerEnvServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../docker-compose.yml' => base_path('docker-compose.yml'),
        ], 'laravel-docker-env');
    }
}
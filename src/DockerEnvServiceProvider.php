<?php

namespace i9dea\DockerEnv;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;


class DockerEnvServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/docker-compose.yml' => base_path('docker-compose.yml'),
        ]);
    }
}
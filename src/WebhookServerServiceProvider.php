<?php

namespace Spatie\WebhookServer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WebhookServerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-webhook-server')
            ->hasConfigFile();
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'laravel-webhook-server-migrations');

        $this->publishes([
            __DIR__.'/Models/' => app_path('Models')
        ], 'laravel-webhook-server-models');

        $this->publishes([
            __DIR__.'/CallWebhookJob.php' => app_path('Jobs/LaravelWebhookServer/CallWebhookJob.php')
        ], 'laravel-webhook-server-job');
    }
}

<?php

namespace hojjabr\PersianSlug;

use Illuminate\Support\ServiceProvider;

class PersianSlugServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hojjabr');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'hojjabr');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/persianslug.php', 'persianslug');

        // Register the service the package provides.
        $this->app->singleton('persianslug', function ($app) {
            return new PersianSlug;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['persianslug'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/persianslug.php' => config_path('persianslug.php'),
        ], 'persianslug.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hojjabr'),
        ], 'persianslug.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/hojjabr'),
        ], 'persianslug.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hojjabr'),
        ], 'persianslug.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

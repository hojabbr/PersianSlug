<?php

namespace hojabbr\PersianSlug;

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
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hojabbr');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'hojabbr');
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
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hojabbr'),
        ], 'persianslug.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/hojabbr'),
        ], 'persianslug.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hojabbr'),
        ], 'persianslug.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

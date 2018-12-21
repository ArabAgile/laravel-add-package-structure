<?php
/**
 * Created by PhpStorm.
 * User: :author_name
 * Date: 12/19/18
 * Time: 4:01 PM
 */

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;

class :uc:packageServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Routes
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Views
//        $this->loadViewsFrom(__DIR__.'/../resources/views', ':lc:vendor-:lc:package');

        // Config file
        //    $this->publishes([
        //      __DIR__ . '/config.php' => config_path(':lc:package.php'),
        //    ], ':lc:vendor-:lc:package');

        // Translation
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', ':lc:vendor-:lc:package');

        // Migrations
        $this->loadMigrationsFrom([
            __DIR__ . '/../database/migrations'
        ]);

    }
}
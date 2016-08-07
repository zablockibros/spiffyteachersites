<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Websites\Websites;

class WebsitesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('websites.manager', function ($app) {
            return new Websites();
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageResize;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("souki", function() {
            return new serviceImage;
        });
    }
}

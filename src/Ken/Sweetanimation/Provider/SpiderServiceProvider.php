<?php

namespace Ken\Sweetanimation\Provider;

use Illuminate\Support\ServiceProvider;

class SpiderServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sweet', function ($app) {
            return $this->app->make('Ken\Sweetanimation\Spider\Slice');
        });
    }
}

<?php

namespace hk\cv;

use Illuminate\Support\ServiceProvider;


class CvServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }
    public function register()
    {
        $this->app->bind('hk-cv', function() {
            return new Cv;
        });
    }

}
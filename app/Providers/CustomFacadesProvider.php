<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFacadesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('check', function(){  
            return new \App\Repositories\Check;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

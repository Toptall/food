<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class BaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('includes.sidebar','App\Providers\ViewComposers\BaseComposer');
    }
}

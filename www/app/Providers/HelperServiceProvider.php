<?php

namespace App\Providers;


use App\Helpers\CommonHelper;
use App\Helpers\UserHelper;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('common-helper', CommonHelper::class);
        $this->app->singleton('user-helper', UserHelper::class);
    }
}

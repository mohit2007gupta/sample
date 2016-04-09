<?php

namespace App\Providers\SC\Rest;

use Illuminate\Support\ServiceProvider;

class UserRestServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Rest\IUserRestContract','App\Services\Rest\UserRestService');
    }
}
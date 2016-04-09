<?php

namespace App\Providers\SC\Domain;

use Illuminate\Support\ServiceProvider;

class UserDomainServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Domain\IUserDomainContract','App\Services\Domain\UserDomainService');

    }
}
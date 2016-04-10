<?php

namespace App\Providers\SC\Rest;

use Illuminate\Support\ServiceProvider;

class ArticleRestServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Rest\IArticleRestContract','App\Services\Rest\ArticleRestService');
    }
}
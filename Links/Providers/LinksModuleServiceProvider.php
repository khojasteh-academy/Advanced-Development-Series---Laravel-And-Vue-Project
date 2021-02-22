<?php

namespace Modules\Links\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Links\Repositories\Contracts\LinkContract;
use Modules\Links\Repositories\Repositories\LinkRepository;

class LinksModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function boot()
    {
        $this->app->bind(LinkContract::class, LinkRepository::class);
    }
}

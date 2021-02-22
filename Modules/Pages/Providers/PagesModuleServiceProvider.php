<?php

namespace Modules\Pages\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Pages\Repositories\Contracts\ComponentContract;
use Modules\Pages\Repositories\Contracts\LayoutContract;
use Modules\Pages\Repositories\Contracts\PageContract;
use Modules\Pages\Repositories\Contracts\PageOptionContract;
use Modules\Pages\Repositories\Repositories\ComponentRepository;
use Modules\Pages\Repositories\Repositories\LayoutRepository;
use Modules\Pages\Repositories\Repositories\PageOptionRepository;
use Modules\Pages\Repositories\Repositories\PageRepository;

class PagesModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(ComponentContract::class, ComponentRepository::class);
        $this->app->bind(LayoutContract::class, LayoutRepository::class);
        $this->app->bind(PageContract::class, PageRepository::class);
        $this->app->bind(PageOptionContract::class, PageOptionRepository::class);
    }
}

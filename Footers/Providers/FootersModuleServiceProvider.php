<?php

namespace Modules\Footers\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Footers\Repositories\Contracts\ColumnContract;
use Modules\Footers\Repositories\Contracts\FooterContract;
use Modules\Footers\Repositories\Contracts\WidgetContract;
use Modules\Footers\Repositories\Repositories\ColumnRepository;
use Modules\Footers\Repositories\Repositories\FooterRepository;
use Modules\Footers\Repositories\Repositories\WidgetRepository;

class FootersModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(ColumnContract::class, ColumnRepository::class);
        $this->app->bind(FooterContract::class, FooterRepository::class);
        $this->app->bind(WidgetContract::class, WidgetRepository::class);
    }
}

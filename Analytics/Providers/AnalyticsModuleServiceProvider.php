<?php

namespace Modules\Analytics\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Analytics\Repositories\Contracts\AnalyticContract;
use Modules\Analytics\Repositories\Repositories\AnalyticRepository;

class AnalyticsModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(AnalyticContract::class, AnalyticRepository::class);
    }
}

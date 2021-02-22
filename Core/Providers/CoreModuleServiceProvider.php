<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Repositories\Core\Contracts\OptionContract;
use Modules\Core\Repositories\Core\Repositories\OptionRepository;

class CoreModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(OptionContract::class, OptionRepository::class);
    }
}

<?php

namespace Modules\Administrators\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Administrators\Repositories\Contracts\AdministratorContract;
use Modules\Administrators\Repositories\Repositories\AdministratorRepository;

class AdministratorModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(AdministratorContract::class, AdministratorRepository::class);
    }
}

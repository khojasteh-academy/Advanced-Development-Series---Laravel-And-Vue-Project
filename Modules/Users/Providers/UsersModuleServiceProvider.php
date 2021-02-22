<?php

namespace Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Users\Repositories\Contracts\UserContract;
use Modules\Users\Repositories\Repositories\UserRepository;

class UsersModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(UserContract::class, UserRepository::class);
    }
}

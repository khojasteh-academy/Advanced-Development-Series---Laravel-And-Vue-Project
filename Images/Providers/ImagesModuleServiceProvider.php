<?php

namespace Modules\Images\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Images\Repositories\Contracts\ImageContract;
use Modules\Images\Repositories\Repositories\ImageRepository;

class ImagesModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(ImageContract::class, ImageRepository::class);
    }
}

<?php

namespace Modules\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Posts\Repositories\Contracts\MetaContract;
use Modules\Posts\Repositories\Contracts\PostContract;
use Modules\Posts\Repositories\Repositories\MetaRepository;
use Modules\Posts\Repositories\Repositories\PostRepository;

class PostsModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(PostContract::class, PostRepository::class);
        $this->app->bind(MetaContract::class, MetaRepository::class);
    }
}

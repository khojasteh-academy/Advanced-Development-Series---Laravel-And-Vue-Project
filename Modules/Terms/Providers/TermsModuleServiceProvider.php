<?php

namespace Modules\Terms\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Terms\Repositories\Contracts\RelationContract;
use Modules\Terms\Repositories\Contracts\TaxonomyContract;
use Modules\Terms\Repositories\Contracts\TermContract;
use Modules\Terms\Repositories\Repositories\RelationRepository;
use Modules\Terms\Repositories\Repositories\TaxonomyRepository;
use Modules\Terms\Repositories\Repositories\TermRepository;

class TermsModuleServiceProvider extends ServiceProvider
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
        $this->app->bind(RelationContract::class, RelationRepository::class);
        $this->app->bind(TaxonomyContract::class, TaxonomyRepository::class);
        $this->app->bind(TermContract::class, TermRepository::class);
    }
}

<?php

namespace Valery\Core\Abstracts\Providers;

use Illuminate\Support\ServiceProvider as LaravelAppServiceProvider;
use Valery\Core\Loaders\AliasesLoaderTrait;
use Valery\Core\Loaders\ProvidersLoaderTrait;

abstract class AbstractMainServiceProvider extends LaravelAppServiceProvider
{
    use AliasesLoaderTrait;
    use ProvidersLoaderTrait;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadServiceProviders();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}

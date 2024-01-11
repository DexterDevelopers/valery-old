<?php

namespace Valery\Core\Providers;

use Illuminate\Support\Facades\Schema;
use Valery\Core\Abstracts\Providers\AbstractMainServiceProvider;
use Valery\Core\Foundation\Valery;
use Valery\Core\Loaders\AutoLoaderTrait;

class CoreServiceProvider extends AbstractMainServiceProvider
{
    use AutoLoaderTrait;

    public function register(): void
    {
        // NOTE: function order of this calls bellow are important. Do not change it.
        $this->app->bind('Valery', Valery::class);
        // Register Valery Facade Classes, should not be registered in the $aliases property, since they are used
        // by the auto-loading scripts, before the $aliases property is executed.
        $this->app->alias(Valery::class, 'Valery');

        parent::register();

        $this->runLoaderRegister();
    }

    public function boot(): void
    {
        parent::boot();

        // Autoload most of the Containers and Ship Components
        $this->runLoadersBoot();

        // Solves the "specified key was too long" error, introduced in L5.4
        Schema::defaultStringLength(191);

    }
}

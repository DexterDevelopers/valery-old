<?php

namespace Valery\Core\Loaders;

use Valery\Core\Foundation\Facades\Valery;

trait AutoLoaderTrait
{
    use MigrationsLoaderTrait;
    use ProvidersLoaderTrait;

    /**
     * To be used from the `boot` function of the main service provider
     */
    public function runLoadersBoot(): void
    {

        $this->loadMigrationsFromCore();

        // Iterate over all the containers folders and autoload most of the components
        foreach (Valery::getAllModulesPaths() as $modulePath) {
            $this->loadMigrationsFromModules($modulePath);
        }
    }

    public function runLoaderRegister(): void
    {
    }
}

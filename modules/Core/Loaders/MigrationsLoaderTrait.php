<?php

namespace Valery\Core\Loaders;

use Illuminate\Support\Facades\File;

trait MigrationsLoaderTrait
{
    public function loadMigrationsFromModules($modulePath): void
    {
        $moduleMigrationDirectory = $modulePath.'/Data/Migrations';
        $this->loadMigrations($moduleMigrationDirectory);
    }

    private function loadMigrations($directory): void
    {
        if (File::isDirectory($directory)) {
            $this->loadMigrationsFrom($directory);
        }
    }

    public function loadMigrationsFromCore(): void
    {
        $shipMigrationDirectory = base_path('modules/Core/Data/Migrations');
        $this->loadMigrations($shipMigrationDirectory);
    }
}

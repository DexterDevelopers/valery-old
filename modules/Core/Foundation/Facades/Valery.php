<?php

namespace Valery\Core\Foundation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getAllModulesPaths()
 * @method static string getClassFullNameFromFile($filePathName)
 *
 * @see \Valery\Core\Foundation\Valery
 */
class Valery extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Valery';
    }
}

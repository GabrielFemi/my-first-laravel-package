<?php

namespace Gabrielfemi\MyFirstLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gabrielfemi\MyFirstLaravelPackage\MyFirstLaravelPackage
 */
class MyFirstLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-first-laravel-package';
    }
}

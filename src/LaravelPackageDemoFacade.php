<?php

namespace Curder\LaravelPackageDemo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Curder\LaravelPackageDemo\LaravelPackageDemo
 */
class LaravelPackageDemoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-demo';
    }
}

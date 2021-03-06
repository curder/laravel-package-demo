<?php

namespace Curder\LaravelPackageDemo;

use Curder\LaravelPackageDemo\Commands\LaravelPackageDemoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPackageDemoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-demo')
            ->hasConfigFile()
            ->hasRoute('laravel-package-demo')
            ->hasViews()
            ->hasMigration('create_laravel_package_demo_table')
            ->hasCommand(LaravelPackageDemoCommand::class);
    }
}

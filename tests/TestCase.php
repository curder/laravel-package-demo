<?php

namespace Curder\LaravelPackageDemo\Tests;

use Curder\LaravelPackageDemo\LaravelPackageDemoServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Curder\\LaravelPackageDemo\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app) : array
    {
        return [
            LaravelPackageDemoServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app) : void
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_package_demo_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}

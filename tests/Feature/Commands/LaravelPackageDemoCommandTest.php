<?php
namespace Curder\LaravelPackageDemo\Tests\Feature\Commands;

use Curder\LaravelPackageDemo\Tests\TestCase;

/**
 * Class LaravelPackageDemoCommandTest
 *
 * @package Curder\LaravelPackageDemo\Tests\Feature\Commands
 */
class LaravelPackageDemoCommandTest extends TestCase
{
    /** @test */
    public function the_laravel_package_demo_command_works(): void
    {
        $this->artisan('laravel-package-demo')
             ->assertExitCode(0);
    }
}

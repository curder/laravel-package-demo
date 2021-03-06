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


    /** @test */
    public function the_config_file_value_is_used_as_output(): void
    {
        $this->artisan('laravel-package-demo')
            ->expectsOutput("Hi from command")
            ->assertExitCode(0);

        $output_text = 'customized text';
        config()->set('package-demo.command_output_text', $output_text);

        $this->artisan('laravel-package-demo')
             ->expectsOutput($output_text)
             ->assertExitCode(0);
    }
}

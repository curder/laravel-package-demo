<?php
namespace Curder\LaravelPackageDemo\Tests\Feature;


use Curder\LaravelPackageDemo\Tests\TestCase;
use Illuminate\Support\Facades\Route;

class MyLaravelPackageDemoControllerTest extends TestCase
{
    /** @test */
    public function the_my_laravel_package_controllers_returns_ok(): void
    {
        $this->get('/laravel-package-demo/prefix/test')
             ->assertOk()
             ->assertSee('Hello from view');
    }
}

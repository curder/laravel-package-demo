<?php
namespace Curder\LaravelPackageDemo\Tests\Feature\Models;

use Curder\LaravelPackageDemo\Models\MyModel;
use Curder\LaravelPackageDemo\Tests\TestCase;

/**
 * Class MyModelTest
 *
 * @package \Curder\LaravelPackageDemo\Tests\Feature\Models
 */
class MyModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model(): void
    {
        /** @var MyModel $model */
        $model = MyModel::factory()->create(['name' => 'jhon']);

        $this->assertDatabaseCount('my_models', 1);

        self::assertEquals('JHON', $model->getUpperCasedName());
    }
}

<?php
namespace Curder\LaravelPackageDemo\Tests\Feature\Models;

use Curder\LaravelPackageDemo\Models\MyModel;
use Curder\LaravelPackageDemo\Tests\TestCase;
use Illuminate\Support\Facades\DB;

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

    /** @test */
    public function it_can_use_json_queries(): void
    {
        $models = DB::table('my_models')
                   ->whereJsonContains('options->languages', 'en')
                   ->get();

        self::assertCount(0, $models);
    }
}

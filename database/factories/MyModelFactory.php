<?php
namespace Curder\LaravelPackageDemo\Database\Factories;

use Curder\LaravelPackageDemo\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class MyModelFactory
 *
 * @package \Curder\LaravelPackageDemo\Tests\database\factories
 */
class MyModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyModel::class;

    /**
     * @return array
     */
    public function definition() : array
    {
        return [
            'name' => $this->faker->firstName,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\CategoryWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryWork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 11),
            'work_id' =>   $this->faker->numberBetween(1, 21),
            'order' =>  $this->faker->randomDigitNotZero(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\CategoryText;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTextFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryText::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 6),
            'text_id' =>   $this->faker->numberBetween(1, 5),
            'order' =>  $this->faker->randomDigitNotZero(),
        ];
    }
}

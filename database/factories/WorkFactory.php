<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'slug' => $this->faker->slug(),
            'media' => $this->faker->sentence(3),
            'dimensions' => $this->faker->randomDigitNotZero().'0 x '.$this->faker->randomDigitNotZero().'0 cm',
            'work_date' => $this->faker->dateTimeBetween('-15 years', 'now'),
        ];
    }
}

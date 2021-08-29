<?php

namespace Database\Factories;

use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Text::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(3),
            'body' => $this->faker->paragraph(10),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'description' => $this->faker->paragraph(1),
            'publication' => $this->faker->sentence(3),
            'publication_date' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}

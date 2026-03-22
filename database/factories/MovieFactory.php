<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * Define the model's default state.
     * Generates fake data for testing purposes.
     */
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence(3),
        'synopsis' => $this->faker->paragraph(),
        'year' => $this->faker->year(),
        'cover' => $this->faker->imageUrl(400, 600, 'films'),
        ];
    }
}

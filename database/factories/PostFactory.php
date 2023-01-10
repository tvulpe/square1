<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'users_id' => fake()->numberBetween(1, 10),
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            'publication_date' => fake()->dateTimeBetween('-12 months')
        ];
    }
}

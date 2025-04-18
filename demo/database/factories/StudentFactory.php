<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'image' => fake()->imageUrl(), // image() returns a path, imageUrl() gives a valid URL
            'address'=>fake()->address(),
            'phone' => fake()->phoneNumber(),
            'age' => fake()->numberBetween(18, 25),
        'gender' => fake()->randomElement(['male', 'female']),
        ];
    }
}

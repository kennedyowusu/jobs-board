<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'salary' => $this->faker->randomNumber(4),
            'location' => $this->faker->city(),
            'job_type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Contract', 'Freelance']),
            'url' => $this->faker->url(),
            'is_featured' => $this->faker->boolean(),
            'employer_id' => \App\Models\Employer::factory(),
        ];
    }
}

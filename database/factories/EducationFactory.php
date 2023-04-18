<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

//create a factory for the Education model:
//php artisan make:factory EducationFactory --model=Education

class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'title' => $this->faker->sentence(3),
            'school' => $this->faker->randomElement(['Humber College', 'University of Toronto', 'University of Waterloo']),
            'started' => $this->faker->dateTimeThisMonth,
            'ended' => $this->faker->dateTimeThisMonth
        ];
    }
}

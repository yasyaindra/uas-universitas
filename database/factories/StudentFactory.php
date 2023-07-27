<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name("male"),
            'gpa' => $this->faker->randomFloat(2, 2.0, 4.0),
            'major_id' => $this->faker->numberBetween(1,5),
            'status' => $this->faker->boolean()
        ];
    }
}

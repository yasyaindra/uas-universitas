<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->secondaryAddress(),
            'capacity' => 30,
            'class_number' => $this->faker->numerify('class-####'),
            'major_id' => $this->faker->numberBetween(1,6),
            'student_id' => $this->faker->numberBetween(1,10),
            'lecturer_id' => $this->faker->numberBetween(1,10),
        ];
    }
}

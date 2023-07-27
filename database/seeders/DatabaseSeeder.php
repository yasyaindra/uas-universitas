<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Classroom::factory(10)->create();
        \App\Models\Lecturer::factory(10)->create();
        \App\Models\Student::factory(10)->create();

        $majors = [
            'Computer Science',
            'Engineering',
            'Business Administration',
            'Psychology',
            'Biology',
            'Mathematics',
        ];

        $faker = \Faker\Factory::create();

        foreach ($majors as $major) {
            DB::table('majors')->insert([
                'name' => $major,
                'minimum_gpa' => $faker->randomFloat(2, 2.0, 4.0), // Random GPA between 2.0 and 4.0 with two decimal places
                // Add other columns if needed
            ]);
        }


    }
}

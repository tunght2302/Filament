<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_id' => fake()->numberBetween(1, 5),
            'state_id' => fake()->numberBetween(1, 5),
            'city_id' => fake()->numberBetween(1, 5),
            'department_id' => fake()->numberBetween(1, 5),
            'country_id' => fake()->numberBetween(1, 5),
            'country_id' => fake()->numberBetween(1, 5),
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'middle_name' => fake()->name(),
            'address' => fake()->address(),
            'zip_code' => fake()->postcode(),
            'date_of_birth' => fake()->date(),
            'date_hired' => fake()->date(),
        ];
    }
}

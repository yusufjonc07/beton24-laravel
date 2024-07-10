<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => 'admin',
            'firstname' => $this->faker->unique()->name,
            'lastname' => $this->faker->unique()->name,
            'position' => $this->faker->unique()->jobTitle(),
            'passportNumber' => "AD" . $this->faker->unique()->randomNumber(6),
            'salary' => 12000000,
            'role' => 'ceo',
            'workplaceId' => 1,
            'departmentId' => 1,
            'shiftId' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
   
}

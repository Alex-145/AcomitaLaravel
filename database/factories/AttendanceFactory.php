<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codemenber'=>$this->faker->unique->randomNumber(8),
            'name'=>$this->faker->unique->firstName,
            'fatherlastname'=>$this->faker->unique->lastName,
            'motherlastname'=>$this->faker->unique->lastName,
            'birthdate'=>$this->faker->date,
            'dni'=>$this->faker->randomNumber(8),
            'celphone'=>$this->faker->phoneNumber,
            'celphone'=>$this->faker->phoneNumber,

            'email'=>$this->faker->email,


        ];
    }
}

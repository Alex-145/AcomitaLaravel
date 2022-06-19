<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActivitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'desciptions'=>$this->faker->text(25),
            'datatime'=>$this->faker->dateTime(),
            'status'=>$this->faker->randomElement(['Realizado','pendiente']),
            'user_id'=>'1'
        ];
    }
}

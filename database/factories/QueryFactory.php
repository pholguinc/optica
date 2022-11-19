<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Query>
 */
class QueryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
			'code'=> $this->faker->numberBetween(0,8),
            'description' => $this->faker->text(45),
			'status' => $this->faker->randomElement(['Activo', 'Inactivo']),
            'sphere_right' => $this->faker->randomNumber(),
            'cylinder_right' => $this->faker->randomNumber(),
            'axis_right' => $this->faker->randomNumber(),
            'av_right' => $this->faker->randomNumber(),

            'sphere_left' => $this->faker->randomNumber(),
            'cylinder_left' => $this->faker->randomNumber(),
            'axis_left' => $this->faker->randomNumber(),
            'av_left' => $this->faker->randomNumber(),

            'dip_near' => $this->faker->randomNumber(),
            'dip_far' => $this->faker->randomNumber(),

            'observations' => $this->faker->text(500),
            'user_id' => User::all()->random()->id,
            'patient_id' => Patient::all()->random()->id

        ];
    }
}

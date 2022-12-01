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

            'sphereRf' => $this->faker->randomNumber(),
            'cylinderRf' => $this->faker->randomNumber(),
            'axisRf' => $this->faker->randomNumber(),
            'dipRf' => $this->faker->randomNumber(),

            'sphereLf' => $this->faker->randomNumber(),
            'cylinderLf' => $this->faker->randomNumber(),
            'axisLf' => $this->faker->randomNumber(),
            'dipLf' => $this->faker->randomNumber(),


            'sphereRn' => $this->faker->randomNumber(),
            'cylinderRn' => $this->faker->randomNumber(),
            'axisRn' => $this->faker->randomNumber(),
            'dipRn' => $this->faker->randomNumber(),


            'sphereLn' => $this->faker->randomNumber(),
            'cylinderLn' => $this->faker->randomNumber(),
            'axisLn' => $this->faker->randomNumber(),
            'dipLn' => $this->faker->randomNumber(),


            'diagnosis' => $this->faker->text(500),
            'control' => $this->faker->date(),
            'patient_id' => Patient::all()->random()->id,
            'user_id' => User::all()->random()->id

        ];
    }
}

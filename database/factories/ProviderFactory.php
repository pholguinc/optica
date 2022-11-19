<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address(),
            'representative' => $this->faker->name,
            'phone' => $this->faker->phoneNumber(),
            'whatsapp' =>  $this->faker->phoneNumber(),
			'status' => $this->faker->randomElement(['Activo', 'Inactivo']),
        ];
    }
}

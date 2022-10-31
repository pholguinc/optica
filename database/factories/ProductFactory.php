<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
			'name' => $this->faker->text(10),
            'barcode'=> $this->faker->numberBetween(0,8),
            'description' => $this->faker->text(45),
            'stock' => $this->faker->numberBetween(0,99),
			'status' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}

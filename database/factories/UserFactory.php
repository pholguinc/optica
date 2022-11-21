<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
            'lastname' => $this->faker->lastName(),
			'status' => $this->faker->randomElement(['Activo', 'Inactivo']),
			'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'dni' => $this->faker->randomNumber(8,true),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => $this->faker->phoneNumber(),
            'remember_token' => Str::random(10),
        ];
    }
}

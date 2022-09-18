<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'email' => $this->faker->name,
			'two_factor_secret' => $this->faker->name,
			'two_factor_recovery_codes' => $this->faker->name,
			'two_factor_confirmed_at' => $this->faker->name,
			'status' => $this->faker->name,
			'current_team_id' => $this->faker->name,
			'profile_photo_path' => $this->faker->name,
        ];
    }
}

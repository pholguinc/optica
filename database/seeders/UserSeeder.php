<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pedro',
            'lastname' => 'Holguin',
            'phone' => '903023713',
            'email' => 'holguinpedro90@gmail.com',
            'dni' => '73317273',
            'password' => bcrypt('12345')
            ]);

        User::factory(99)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Patient;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Query;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        Category::factory(10)->create();
        Product::factory(10)->create();
        Patient::factory(100)->create();
        Query::factory(100)->create();
        Provider::factory(100)->create();

    }
}

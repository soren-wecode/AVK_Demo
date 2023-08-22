<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Wecode',
            'email' => 'soren@wecode.dk',
        ]);

        \App\Models\User::factory(10)->create();


        $this->call(ProductsSeeder::class);
        $this->call(ProductOptionsSeeder::class);
    }
}

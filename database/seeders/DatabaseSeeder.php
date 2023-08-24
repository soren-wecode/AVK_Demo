<?php

namespace Database\Seeders;

use App\Models\UserDiscount;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->has(UserDiscount::factory(), 'discounts')
            ->create([
                'name' => 'Wecode',
                'email' => 'soren@wecode.dk',
            ]);

        User::factory(10)->create();


        $this->call(ProductsSeeder::class);
        $this->call(ProductOptionsSeeder::class);
    }
}

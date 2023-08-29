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
            ->has(UserDiscount::factory()->state(function (array $attributes, User $user) {
                return [
                    'user_id' => $user->id,
                    'discount' => 10,
                ];
            }), 'discounts')
            ->create([
                'name' => 'Wecode',
                'username' => 'wecode',
                'email' => 'info@wecode.dk',
            ]);

        User::factory()
            ->has(UserDiscount::factory()->state(function (array $attributes, User $user) {
                return [
                    'user_id' => $user->id,
                    'discount' => 25,
                ];
            }), 'discounts')
            ->create([
                'name' => 'CADENT GAS LTD',
                'username' => 'CAD100',
                'email' => 'cad@wecode.dk',
            ]);

        User::factory(10)->create();


        $this->call(ProductsUKSeeder::class);
        $this->call(ProductOptionsUKSeeder::class);

        // $this->call(ProductsDKSeeder::class);
        // $this->call(ProductOptionsDKSeeder::class);
    }
}

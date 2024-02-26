<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Item::factory()
            ->has(Order::factory()->count(3))
            ->count(3)
            ->create();

        $this->call([
            // ItemSeeder::class,
            // OrderSeeder::class,
            ItemOrderSeeder::class,
            ItemOrderSeeder::class,
            ItemOrderSeeder::class,
            ItemOrderSeeder::class,
            ItemOrderSeeder::class,
        ]);
    }
}

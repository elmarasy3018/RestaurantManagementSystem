<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Order;
use Faker\Factory as Faker;

class ItemOrderSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Order::all() as $order) {
            $faker = Faker::create();
            $itemCount = rand(1, 3); // Number of items for this order (1-3)
            $items = Item::inRandomOrder()->take($itemCount)->pluck('id');
            $order->items()->attach($items, [
                'quantity' => random_int(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed with all items in each order
        // $itemIds = Item::all()->pluck('id')->unique(); // Get unique item IDs
        // $orderIds = Order::all()->pluck('id')->unique(); // Get unique order IDs
        // $ToInsert = [];
        // foreach ($itemIds as $itemId) {
        //     foreach ($orderIds as $orderId) {
        //         $ToInsert[] = [
        //             'item_id' => $itemId,
        //             'order_id' => $orderId,
        //             'quantity' => random_int(1, 5)
        //         ];
        //     }
        // }
        // DB::table('item_order')->insert($ToInsert);
    }
}

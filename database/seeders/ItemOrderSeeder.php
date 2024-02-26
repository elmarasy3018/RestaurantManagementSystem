<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Order;

class ItemOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item_order')->insert([
            'item_id' => Item::all()->random()->id,
            'order_id' => Order::all()->random()->id,
        ]);
    }
}

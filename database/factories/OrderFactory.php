<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = 'Order_00' . $this->faker->numberBetween(100, 999);
        return [
            'name' => $name,
            'address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['Processing', 'Completed', 'Expired']),
        ];
    }
}

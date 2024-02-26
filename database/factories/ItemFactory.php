<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->lastName(),
            'description' => $this->faker->name(),
            'category' => $this->faker->randomElement([
                "Appetizers",
                "Main Courses",
                "Sides",
                "Desserts",
                "Beverages"
            ]),
            'price' => $this->faker->numberBetween(1, 500),
        ];
    }
}

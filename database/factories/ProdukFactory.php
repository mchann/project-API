<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'show_in_transaction' => fake()->boolean(1),
            'use_stock' => fake()->boolean(),
            'stock' => fake()->numberBetween(0, 100),
            'code' => fake()->unique()->numerify('####'),
            'basic_price' => fake()->numberBetween(1000, 10000),
            'selling_price' => fake()->numberBetween(1000, 10000),
            'category' => fake()->randomElement(['Makanan', 'Minuman', 'Lai nnya']),
            'picture' => fake()->imageUrl(),
        ];
    }
}

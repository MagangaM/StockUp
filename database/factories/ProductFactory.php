<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'code'=>$this->faker->unique()->numerify('#####'),
        'name'=>$this->faker->word(),
        'description'=>$this->faker->sentence(),
        'image'=>$this->faker->imageUrl(640, 480, 'products'),
        'purchase_price'=>$this->faker->randomFloat(2, 10, 100),
        'sale_price'=>$this->faker->randomFloat(2, 15, 150),
        'minimum_stock'=>$this->faker->numberBetween(1, 5),
        'maximum_stock'=>$this->faker->numberBetween(10, 20),
        'unit_of_measurement'=>$this->faker->randomElement(['kg', 'g', 'l', 'ml', 'unit']),
        'status'=>$this->faker->randomElement(['1', '0']),
        'category_id'=>$this->faker->numberBetween(1, 10),
        ];
    }
}

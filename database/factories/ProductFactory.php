<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->sentence(),
            'price' => $this->faker->unique()->numberBetween(200, 999),
            'quantity' => $this->faker->unique()->numberBetween(1, 150),
            'user_id' => 1,
            'category_id' => 1,
        ];
    }
}

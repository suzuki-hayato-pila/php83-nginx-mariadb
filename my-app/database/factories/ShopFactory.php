<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use APP\Models\Shop; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Shop::class; // ← 追加

    public function definition(): array
    {
        return [
            'name' => $this->faker->streetName. 'Shop',
            'location' => $this->faker->address,
            'description' => $this->faker->sentence,
        ];
    }
}

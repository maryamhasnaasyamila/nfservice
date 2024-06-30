<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'icon' => $this->faker->imageUrl(180, 80, 'SUB_CATEGORIES', true),
        ];
    }
}
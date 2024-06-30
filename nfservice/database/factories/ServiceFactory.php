<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
            'harga' => $this->faker->numberBetween(10000, 100000),
            'thumbnail' => $this->faker->imageUrl(680, 480, 'SERVICES', true),
            'contributor_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
            'sub_category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

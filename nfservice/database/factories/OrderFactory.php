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
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'jenis' => $this->faker->boolean(),
            'service_id' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->numberBetween(1,4),
        ];
    }
}

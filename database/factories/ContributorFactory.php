<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributor>
 */
class ContributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'user_id' => 1,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'link_map' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.241610439622!2d106.84187777453303!3d-6.362768562243345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1718528018180!5m2!1sid!2sid",

        ];
    }
}

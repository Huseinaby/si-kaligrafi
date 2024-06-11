<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bahan>
 */
class BahanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_bahan' => $this->faker->sentence(1),
            'slug' => $this->faker->slug(),
            'jenis_bahan' => $this->faker->sentence(1),
            'deskripsi_bahan' => $this->faker->paragraph(),
            'foto_bahan' => $this->faker->sentence(1) 
        ];
    }
}

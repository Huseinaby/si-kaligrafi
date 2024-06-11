<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ornamen>
 */
class OrnamenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bahan_id' => mt_rand(1,3),
            'nama_ornamen' => $this->faker->sentence(mt_rand(1,2)),
            'slug' => $this->faker->slug(),
            'deskripsi_ornamen' => $this->faker->paragraph(mt_rand(3,5)),
            'jenis_ornamen' => $this->faker->sentence(mt_rand(1,2)),
            'foto_ornamen' => $this->faker->sentence(1),
            'kategori' => $this->faker->sentence(1)
        ];
    }
}

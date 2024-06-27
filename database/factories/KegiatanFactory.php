<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kegiatan' => $this->faker->sentence(3),
            'deskripsi_kegiatan' => $this->faker->sentence(10),
            'tanggal_kegiatan' => $this->faker->date(),
            'kelas' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
        ];
    }
}

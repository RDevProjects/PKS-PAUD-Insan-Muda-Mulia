<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nisn' => $this->faker->unique()->randomNumber(9),
            'nama' => $this->faker->name(),
            'kelas' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'nama_orangtua' => $this->faker->name(),
            'no_telepon_orangtua' => $this->faker->phoneNumber(),
        ];
    }
}

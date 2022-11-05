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
    public function definition()
    {
        $gender = ['Laki-Laki', 'Perempuan'];
        return [
            'wali_siswa_id' => fake()->numberBetween(1, 5),
            'nis' => fake()->randomNumber(4),
            'nisn' => fake()->randomNumber(5),
            'siswa_name' => fake()->name(),
            'jenis_kelamin' => $gender[fake()->numberBetween(0,1)],
            'alamat' => fake()->address()
        ];
    }
}

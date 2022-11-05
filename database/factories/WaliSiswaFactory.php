<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WaliSiswa>
 */
class WaliSiswaFactory extends Factory
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
            'wali_siswa_name' => fake()->name(),
            'jenis_kelamin' => $gender[fake()->numberBetween(0,1)],
            'alamat' => fake()->address(),
            'nomor_hp' => fake()->phoneNumber()
        ];
    }
}

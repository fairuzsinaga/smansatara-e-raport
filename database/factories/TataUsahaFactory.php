<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TataUsaha>
 */
class TataUsahaFactory extends Factory
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
            'tata_usaha_name' => fake()->name(),
            'nomor_hp' => fake()->phoneNumber(),
            'jenis_kelamin' => $gender[fake()->numberBetween(0,1)],
            'alamat' => fake()->address()
        ];
    }
}

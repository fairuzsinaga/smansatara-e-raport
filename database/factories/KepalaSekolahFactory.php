<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KepalaSekolah>
 */
class KepalaSekolahFactory extends Factory
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
            'nip' => fake()->randomNumber(5),
            'jenis_kelamin' => $gender[fake()->numberBetween(0,1)],
            'kepsek_name' => fake()->name(),
            'alamat' => fake()->address()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
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
            'guru_name' => fake()->name(),
            'alamat' => fake()->address(),
            'jenis_kelamin' => $gender[fake()->numberBetween(0,1)]
        ];
    }
}

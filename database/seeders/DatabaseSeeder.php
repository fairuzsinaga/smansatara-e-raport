<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use App\Models\TataUsaha;
use App\Models\WaliSiswa;
use App\Models\KepalaSekolah;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(5)->create();
        Guru::factory(5)->create();
        KepalaSekolah::factory(5)->create();
        WaliSiswa::factory(5)->create();
        Siswa::factory(5)->create();
        TataUsaha::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 10, //fake()->unique->numerify('#'),
            'nama_lengkap' => fake()->randomElement(['Fauzi', 'Yukie', 'Udin', 'Jamal', 'Siapa']),
            'alamat' =>  fake()->randomElement(['Bandung Barat Di Timur', 'Cimahi Timur Pindah Barat']),
            'no_telp' => fake()->randomNumber(3, true),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Budha']),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => fake()->randomElement(['Bandung Di Timur', 'Cimahi', 'Isekai']),
            'tgl_lahir' => fake()->date(),
            'foto' => 'foto-profile/profile-contoh.jpg',
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailAbsensi>
 */
class DetailAbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'absensi_id' => 1,
            'detail_hari_absen_id' => 1,
            'profile_id' => fake()->randomNumber(1, true),
            'jam_absen' => fake()->time(),
            'absen' => fake()->randomElement(['hadir', 'sakit', 'izin', 'alpa']),
            'keterangan' => fake()->randomLetter(),
            // 'foto' => 'foto-profile/profile-contoh.jpg',
        ];
    }
}

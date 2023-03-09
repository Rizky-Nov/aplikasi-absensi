<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absensi>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jam_mulai' => fake()->time(),
            'jam_kadaluarsa' => fake()->time(),
            'tanggal_mulai' => fake()->date(),
            'tanggal_kadaluarsa' => fake()->date(),
        ];
    }
}

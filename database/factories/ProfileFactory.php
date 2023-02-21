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
            'user_id' => fake()->randomNumber(1, true),
            'nama_lengkap' => fake()->shuffle('kataapasajabisakok'),
            'kelas' => fake()->randomElement(['PT Usaha Bisa', 'PT Semua Bisa Kerja']),
            'alamat' => fake()->randomElement(['Bandung Barat Di Timur', 'Cimahi Timur Pindah Barat']),
            'no_telp' => fake()->randomNumber(9, true),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Budha']),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => fake()->randomElement(['Bandung Di Timur', 'Cimahi', 'Isekai']),
            'tgl_lahir' => fake()->date(),

            // $table->foreignId('user_id')->constrained();
            // $table->string('nama_lengkap');
            // $table->string('kelas');
            // $table->text('alamat');
            // $table->integer('no_telp');
            // $table->string('agama');
            // $table->string('jenis_kelamin');
            // $table->string('tempat_lahir');
            // $table->date('tgl_lahir');
        ];
    }
}

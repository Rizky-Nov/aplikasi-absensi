<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailAbsensi;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'kode_role' => 'user',
            'nama_role' => 'user',
        ]);

        Role::create([
            'kode_role' => 'admin',
            'nama_role' => 'admin',
        ]);

        User::factory()->create([
            'email' => 'user@example.com',
            'role_id' => 1
        ]);
        User::factory()->create([
            'email' => 'admin@example.com',
            'role_id' => 2
        ]);
        User::factory(10)->create();

        Profile::factory(10)->create();

        DetailAbsensi::factory(10)->create();

    }
}

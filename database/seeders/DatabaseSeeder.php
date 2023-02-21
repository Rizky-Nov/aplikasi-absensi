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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::create([
            'kode_role' => 'user',
            'nama_role' => 'user',
        ]);

        Role::create([
            'kode_role' => 'admin',
            'nama_role' => 'admin',
        ]);

        User::factory(10)->create();

        Profile::factory(10)->create();

        DetailAbsensi::factory(10)->create();

    }
}

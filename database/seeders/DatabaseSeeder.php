<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailAbsensi;
use App\Models\Hari;
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

        // Hari::create([
        //     'hari' => ''
        // ]);

        // User::factory()->create([
        //     'email' => 'admin@gmail.com',
        //     'password' => 'admin123',
        //     'role_id' => 2
        // ]);

        // User::factory()->create([
        //     'email' => 'user@gmail.com',
        //     'password' => 'user123',
        //     'role_id' => 1
        // ]);
        
        // User::factory()->create([
        //     'email' => 'user1@gmail.com',
        //     'password' => 'user123',
        //     'role_id' => 1
        // ]);

        // User::factory()->create([
        //     'email' => 'user2@gmail.com',
        //     'password' => 'user123',
        //     'role_id' => 1
        // ]);

        // User::factory()->create([
        //     'email' => 'user3@gmail.com',
        //     'password' => 'user123',
        //     'role_id' => 1
        // ]);

        // User::factory(10)->create();

        // Profile::factory(10)->create();

        // DetailAbsensi::factory(10)->create();

    }
}

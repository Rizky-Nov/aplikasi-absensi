<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailAbsensi;
use App\Models\DetailHariAbsen;
use App\Models\Absensi;
use App\Models\Hari;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\Kelas;
use App\Models\DetailKelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        Hari::create([
            'kode' => 'Mon',
            'hari' => 'Senin',
        ]);
        Hari::create([
            'kode' => 'Tue',
            'hari' => 'Selasa',
        ]);
        Hari::create([
            'kode' => 'Wed',
            'hari' => 'Rabu',
        ]);
        Hari::create([
            'kode' => 'Thu',
            'hari' => 'Kamis',
        ]);
        Hari::create([
            'kode' => 'Fri',
            'hari' => 'Jum`at',
        ]);
        Hari::create([
            'kode' => 'Sat',
            'hari' => 'Sabtu',
        ]);
        Hari::create([
            'kode' => 'Sun',
            'hari' => 'Minggu',
        ]);

        User::factory(9)->create();
        User::factory()->create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role_id' => 2
        ]);
        Kelas::create([
            'user_id' => 10,
            'kode_tempat' => '1234',
            'nama_tempat' => 'Kelas 1234',
        ]);
        DetailKelas::factory(9)->create();

        Profile::factory()->create([
            'user_id' => 1,
        ]);
        Profile::factory()->create([
            'user_id' => 2,
        ]);
        Profile::factory()->create([
            'user_id' => 3,
        ]);
        Profile::factory()->create([
            'user_id' => 4,
        ]);
        Profile::factory()->create([
            'user_id' => 5,
        ]);
        Profile::factory()->create([
            'user_id' => 6,
        ]);
        Profile::factory()->create([
            'user_id' => 7,
        ]);
        Profile::factory()->create([
            'user_id' => 8,
        ]);
        Profile::factory()->create([
            'user_id' => 9,
        ]);
        Profile::factory()->create([
            'user_id' => 10,
        ]);
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

        Absensi::factory(10)->create();
        DetailHariAbsen::factory(1)->create();
        DetailAbsensi::factory(10)->create();

    }
}

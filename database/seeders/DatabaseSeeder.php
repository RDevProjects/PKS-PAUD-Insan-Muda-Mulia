<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Siswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'admin',
            'name' => 'Test admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Siswa::factory(20)->create();

        Kegiatan::factory(20)->create();

        Pengumuman::factory(20)->create();
    }
}

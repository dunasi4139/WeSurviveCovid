<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Duwi',
                'email' => 'duwi@gmail.com',
                'password' => Hash::make('password123'),
                'role_id' => 1, // Masyarakat
            ],
            [
                'name' => 'Edward Jenner',
                'email' => 'dokter@dummy.com',
                'password' => Hash::make('dokter123'),
                'role_id' => 2, // Dokter
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@dummy.com',
                'password' => Hash::make('password123'),
                'role_id' => 0, // Admin
            ],
        ]);
    }
}

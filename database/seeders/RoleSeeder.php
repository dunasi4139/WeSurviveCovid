<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 0, 'name' => 'Admin'], 
            ['id' => 1, 'name' => 'Masyarakat'], 
            ['id' => 2, 'name' => 'Dokter'],

        ]);
    }
}

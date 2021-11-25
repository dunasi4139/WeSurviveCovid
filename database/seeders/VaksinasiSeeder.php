<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaksinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempat_vaksin')->insert([
            [
                'nama' => 'RS selalu di hati',
                'syarat' => '17th Keatas',
                'jadwal' => 'Senin - Kamis jam 9',
                'alamat' => 'jl. Gatot Subroto No. xxx Desa xxx MLG',
                'jenis' => 'Sinovac',
                'province_id' => '35',
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'nama' => 'RS di jiwa',
                'syarat' => '18th Keatas',
                'jadwal' => 'Senin - Kamis jam 10',
                'alamat' => 'jl. Gatot Subroto No. 100',
                'jenis' => 'Sinovac',
                'province_id' => '31',
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
        ]);
    }
}

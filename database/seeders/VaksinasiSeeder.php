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
                'nama' => 'Puskesmas Kalibaru',
                'syarat' => 'Membawa KTP, umur diatas 12 tahun, Membawa KK',
                'jadwal' => 'Senin - Kamis jam 07.00  - 12.00 WIB',
                'alamat' => 'Jln Raya Jember Kecamatan Kalibaru Kabupaten Banyuwangi',
                'jenis' => 'AstraZeneca',
                'gambar' => 'images/vaccines/dummy1.jpg',
                'province_id' => '8',
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'nama' => 'Balai Desa Kebonrejo',
                'syarat' => 'Membawa KTP, umur diatas 12 tahun, Membawa KK',
                'jadwal' => 'Selasa, 29 November 2021 jam 07.00  - 12.00 WIB',
                'alamat' => 'Jln Malangsari  Kecamatan Kebonrejo  Kabupaten Bekasi',
                'jenis' => 'Pfizer',
                'gambar' => 'images/vaccines/dummy2.jpeg',
                'province_id' => '6',
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
            [
                'nama' => 'Puskesmas Kalisat',
                'syarat' => 'Membawa KTP, umur diatas 12 tahun, Membawa KK',
                'jadwal' => 'Kamis , 1 Desember 2021 jam 07.00  - 12.00 WIB',
                'alamat' => 'Jln  jember Kecamatan Kalisetail  Kabupaten Jember',
                'jenis' => 'Moderna',
                'gambar' => 'images/vaccines/dummy3.jpeg',
                'province_id' => '8',
                'created_at' => '2021-11-24 23:12:47',
                'updated_at' => '2021-11-24 23:12:47',
            ],
            [
                'nama' => 'RS Pertamina Rantau',
                'syarat' => 'Membawa KTP, umur diatas 12 tahun, Membawa KK',
                'jadwal' => 'Senin - Kamis jam 07.00  - 12.00 WIB',
                'alamat' => 'Jl. Cepu Rantau Kab.Aceh Timur',
                'jenis' => 'Cinovac',
                'gambar' => 'images/vaccines/dummy4.jpg',
                'province_id' => '6',
                'created_at' => '2021-11-23 20:12:47',
                'updated_at' => '2021-11-23 20:12:47',
            ],
        ]);
    }
}

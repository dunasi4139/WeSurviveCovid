<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'judul' => 'RS selalu di hati',
                'gambar' => 'images/about/1.png',
                'isi' => 'Isis nya panjangin donk biar sehat jasmani dan rohani',
                'dokter_id' => 1,
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'judul' => 'RS satu jiwa',
                'gambar' => 'images/about/2.png',
                'isi' => 'Isis nya panjangin donk biar sehat jasmani dan rohani',
                'dokter_id' => 2,
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
        ]);
    }
}

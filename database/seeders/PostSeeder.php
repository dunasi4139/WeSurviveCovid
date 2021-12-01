<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'judul' => 'Pengalaman Eks Pasien Covid-19',
                'gambar' => 'images/posts/dummy-01.jpeg',
                'isi' => 'Diawali tanggal 17 Desember, saya pulang awal dari kantor karena mulai terasa demam. Saya lalu memutuskan untuk menjalani aktivitas terpisah dengan anggota keluarga di rumah dengan melakukan isolasi mandiri di kamar',
                'user_id' => 1,
                'like' => 0,
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'judul' => 'Pengalaman Saat Orang Tua dan Adiknya Terpapar Covid-19',
                'gambar' => 'images/posts/dummy-02.jpg',
                'isi' => 'Hampir 2 tahun melihat sosial media dengan berita covid, angka positif, dan berita duka yang muncul setiap hari akhirnya saya ada di posisi ini, merasakan bagaimana paniknya ketika mendengar papa, mama dan adik saya positif. Kesulitan mencari RS, melihat sendiri para nakes yang kelelahan mengatur banyaknya antrean pasien. Astaghfirullah..',
                'user_id' => 1,
                'like' => 0,
                'created_at' => '2021-11-23 20:12:47',
                'updated_at' => '2021-11-23 20:12:47',
            ],
        ]);
    }
}

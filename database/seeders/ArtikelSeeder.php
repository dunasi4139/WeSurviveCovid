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
                'judul' => 'Tingkat Kematian Akibat Virus Corona (COVID-19)',
                'gambar' => 'images/about/1.png',
                'isi' => ' Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19, jumlah kasus terkonfirmasi positif hingga 4 November 2021 adalah 4.246.802 orang dengan jumlah kematian 143.500 jiwa. Dari angka tersebut, diketahui tingkat kematian (case fatality rate) akibat COVID-19 adalah sekitar 3,4%. Jika dilihat berdasarkan usia, kelompok usia >60 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan kelompok usia lainnya. Sedangkan, bila dilihat dari jenis kelamin, 52,3 % penderita yang meninggal akibat COVID-19 adalah laki-laki dan 47,7% sisanya adalah perempuan. Meski jumlah kematian akibat COVID-19 tergolong tinggi, angka kesembuhan dari COVID-19 juga terus bertambah. Data terakhir menyebutkan, jumlah penyintas atau orang yang pernah terinfeksi virus Corona kemudian sembuh adalah 4.091.938 jiwa.',
                'dokter_id' => 1,
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'judul' => 'Gejala Virus Corona (COVID-19)',
                'gambar' => 'images/about/2.png',
                'isi' => 'Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita COVID-19 dengan gejala berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, atau nyeri dada. Keluhan tersebut muncul ketika tubuh bereaksi melawan virus Corona.',
                'dokter_id' => 2,
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
        ]);
    }
}

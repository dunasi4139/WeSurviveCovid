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
                'gambar' => 'images/articles/dummy1.jpg',
                'isi' => ' Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19, jumlah kasus terkonfirmasi positif hingga 4 November 2021 adalah 4.246.802 orang dengan jumlah kematian 143.500 jiwa. Dari angka tersebut, diketahui tingkat kematian (case fatality rate) akibat COVID-19 adalah sekitar 3,4%. Jika dilihat berdasarkan usia, kelompok usia >60 tahun memiliki persentase angka kematian yang lebih tinggi dibandingkan kelompok usia lainnya. Sedangkan, bila dilihat dari jenis kelamin, 52,3 % penderita yang meninggal akibat COVID-19 adalah laki-laki dan 47,7% sisanya adalah perempuan. Meski jumlah kematian akibat COVID-19 tergolong tinggi, angka kesembuhan dari COVID-19 juga terus bertambah. Data terakhir menyebutkan, jumlah penyintas atau orang yang pernah terinfeksi virus Corona kemudian sembuh adalah 4.091.938 jiwa.',
                'dokter_id' => 2,
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'judul' => 'Gejala Virus Corona (COVID-19)',
                'gambar' => 'images/articles/dummy2.jpg',
                'isi' => 'Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita COVID-19 dengan gejala berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, atau nyeri dada. Keluhan tersebut muncul ketika tubuh bereaksi melawan virus Corona.',
                'dokter_id' => 2,
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
            [
                'judul' => 'Mengenal COVID-19 Varian Lambda',
                'gambar' => 'images/articles/dummy3.jpg',
                'isi' => 'COVID-19 varian Lambda atau C.37 pertama kali diidentifikasi di Peru pada bulan Desember tahun 2020. COVID-19 varian Lambda memiiliki 2 mutasi pada domain pengikat reseptor protein spike virus SARS-CoV-2, yakni mutasi L452Q dan F490S.

                Mengenal COVID-19 Varian Lambda - Alodokter
                
                Virus Corona varian Lambda pertama kali banyak ditemukan di negara Amerika Selatan. Namun, virus ini diketahui telah menyebar ke berbagai negara lain, seperti Inggris, Amerika Serikat, dan Kanada.
                
                Gejala COVID-19 varian Lambda tidak jauh berbeda dengan gejala COVID-19 pada umumnya, yaitu demam, batuk, pilek, nyeri otot, sakit kepala, lemas dan gangguan indera penciuman (anosmia).
                
                ',
                'dokter_id' => 2,
                'created_at' => '2021-11-26 20:12:47',
                'updated_at' => '2021-11-26 20:12:47',
            ],
            [
                'judul' => 'Vaksin AstraZeneca',
                'gambar' => 'images/articles/dummy4.jpg',
                'isi' => 'Vaksin AstraZeneca atau AZD1222 adalah vaksin untuk mencegah penyakit COVID-19. Vaksin ini merupakan hasil kerja sama antara Universitas Oxford dan AstraZeneca yang dikembangkan sejak Februari 2020.

                Vaksin AstraZeneca untuk COVID-19 telah menjalani uji klinis di Inggris, Brazil, dan Afrika Selatan. Vaksin ini memiliki nilai efikasi (efek perlindungan terhadap COVID-19) sebesar 63,09%.
                
                Vaksin AstraZeneca - Alodokter
                
                Vaksin AstraZeneca berasal dari virus hasil rekayasa genetika (viral vector). Vaksin ini bekerja dengan cara menstimulasi atau memicu tubuh untuk membentuk antibodi yang dapat melawan infeksi virus SARS-Cov-2.',
                'dokter_id' => 2,
                'created_at' => '2021-11-23 20:12:47',
                'updated_at' => '2021-11-23 20:12:47',
            ],
            [
                'judul' => 'Apakah Penderita COVID-19 Boleh Berpuasa?',
                'gambar' => 'images/articles/dummy5.jpg',
                'isi' => 'Orang yang sedang sakit, hamil, atau menyusui diberikan keringanan untuk tidak berpuasa di bulan Ramadan jika memang tidak mampu untuk menjalaninya, atau jika berpuasa dinilai dapat memperburuk kondisi penyakitnya dan menurunkan efektivitas pengobatan.

                Apakah Penderita COVID-19 Boleh Berpuasa? - Alodokter
                
                Meski begitu, ada beberapa kondisi penyakit yang masih dianggap aman untuk berpuasa selama penderitanya menuruti anjuran dokter, terutama dalam hal asupan nutrisi dan cairan, serta jadwal konsumsi obat.
                
                Hal yang sama juga berlaku untuk infeksi virus Corona. Aman atau tidaknya bagi penderita COVID-19 untuk berpuasa tergantung pada kondisi fisiknya dan pengobatan yang sedang dijalaninya.',
                'dokter_id' => 2,
                'created_at' => '2021-11-23 09:12:47',
                'updated_at' => '2021-11-23 09:12:47',
            ],
            [
                'judul' => 'COVID-19 Lebih Berbahaya bagi Lansia di Atas 70 Tahun',
                'gambar' => 'images/articles/dummy6.jpg',
                'isi' => 'Di seluruh dunia, tercatat bahwa tingkat kematian akibat COVID-19 atau case fatality rate (CFR) pada usia 50–69 tahun adalah sekitar 0,31–1%. Sementara pada usia 70–79 tahun, tingkat kematian naik menjadi 2,95%, dan pada usia 80-89 tahun, tingkat kematiannya bisa mencapai 4,47%.

                Berdasarkan data tersebut, tingkat kematian lansia di atas 70 tahun akibat pandemi ini lebih tinggi 2 kali lipat dibandingkan usia yang lebih muda.
                
                Di Cina, tingkat kematian akibat penyakit COVID-19 mencapai 8% pada orang yang berusia 70 tahun ke atas dan 14,8% pada orang dengan usia di atas 80 tahun. Hal ini juga terlihat di negara-negara lain, misalnya Italia, rata-rata pasien COVID-19 yang meninggal berusia sekitar 80 tahun. Di Indonesia sendiri, tingkat kematian (fatality rate) pada kelompok usia di atas 60 tahun adalah sekitar 17%.
                
                Tingkat kematian di kelompok usia ini memang merupakan yang tertinggi dibandingkan kelompok usia lainnya. Namun, perlu dicatat bahwa jumlah orang yang terkena COVID-19 sebenarnya lebih banyak daripada yang terdata. Hal ini bisa disebabkan oleh beragam hal, mulai dari kurangnya alat pemeriksaan, tidak akuratnya hasil pemeriksaan, hingga ketakutan masyarakat untuk melakukan pemeriksaan ke rumah sakit.
                
                Dengan beranggapan bahwa jumlah lansia yang menderita COVID-19 sebenarnya lebih banyak daripada yang berhasil terdata, tingkat kematian pada lansia di Indonesia akibat penyakit ini bisa jadi lebih rendah daripada 17%.',
                'dokter_id' => 2,
                'created_at' => '2021-11-20 20:12:47',
                'updated_at' => '2021-11-20 20:12:47',
            ],
            
        ]);
    }
}

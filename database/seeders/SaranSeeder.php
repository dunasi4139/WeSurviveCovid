<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sarans')->insert([
            [
                'judul' => 'Vitamin B6, C, dan E',
                'gambar' => 'images/suggestions/dummy1.jpg',
                'isi' => 'Suplemen yang mengandung vitamin B6, vitamin C, likopen, dan vitamin E cukup direkomendasikan. Ketiga vitamin ini dapat memberi manfaat bagi tubuh untuk meningkatkan sistem kekebalan tubuh lebih optimal.',
                'created_at' => '2021-11-23 20:12:47',
                'updated_at' => '2021-11-23 20:12:47',
            ],
            [
                'judul' => 'Echinacea',
                'gambar' => 'images/suggestions/dummy2.jpg',
                'isi' => 'Suplemen yang mengandung echinacea cukup direkomendasikan. Selain mampu meningkatkan sistem kekebalan tubuh Anda, echinacea dipercaya bermanfaat sebagai antivirus, antiradang, dan antioksidan. Oleh karena itu, tumbuhan herba ini dianggap baik untuk membantu tubuh melawan virus penyebab flu.',
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
            [
                'judul' => 'Contekan Menu Diet Sehat Setiap Hari',
                'gambar' => 'images/suggestions/dummy3.jpg',
                'isi' => 'Contoh Menu Diet Sehat 2.000 Kalori
                Berikut adalah menu diet sehat 2.000 kalori yang bisa Anda terapkan untuk sarapan, makan siang, dan makan malam. Meski dinamakan menu diet sehat, lidah Anda masih bisa dimanjakan oleh variasi makanan ini:
                
                Sarapan
                
                Anda bisa mengisi perut Anda dengan dua buah telur rebus atau dimasak orak-arik dengan sedikit minyak. Untuk sarapan yang lebih mengenyangkan, Anda juga mengombinasikan telur tadi dengan dua lembar roti gandum dengan olesan mentega dan satu cangkir susu rendah lemak.
                
                Susu bisa diganti dengan secangkir teh atau kopi tanpa susu dan gula.
                
                Makan siang
                
                Pada waktu siang, Anda bisa menyantap satu potong dada ayam yang dipanggang atau ditumis, satu mangkuk salad atau gado-gado, ditambah segenggam nasi. Kentang rebus atau panggang juga bisa menjadi alternatif pengganti nasi.
                
                Makan malam
                
                Saat makan malam, konsumsilah satu cangkir brokoli yang dikukus atau ditumis, secangkir nasi merah, satu potong ikan, dan satu mangkuk salad yang berisi bayam, tomat, serta bawang bombai.
                
                Camilan
                
                Contoh camilan yang bisa Anda konsumsi tiap hari terdiri dari buah-buahan, oatmeal, yoghurt rendah lemak, dan kacang-kacangan.
                
                Mungkin ada saatnya Anda bosan dengan makanan sehat dan ingin mengonsumsi makanan dengan kadar lemak dan kalori tinggi, seperti makanan cepat saji Anda bisa mengonsumsinya pada hari tertentu, misalnya tiap hari minggu.
                
                Namun, keesokan harinya, Anda harus mengonsumsi makanan yang rendah kalori guna menghindari penumpukan kalori pada tubuh.
                
                Di samping menerapkan menu diet sehat, Anda juga disarankan rutin berolahraga setidaknya 30 menit per hari, demi menjaga berat badan dan kebugaran tubuh.
                
                Jika Anda masih bingung dalam menentukan menu diet sehat atau Anda sedang menjalani jenis diet tertentu, sebaiknya berkonsultasilah dengan dokter untuk mendapatkan saran diet yang tepat.',
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
        ]);
    }
}

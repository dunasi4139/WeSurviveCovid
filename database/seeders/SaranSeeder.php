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
                'gambar' => 'images/about/1.png',
                'isi' => 'Suplemen yang mengandung vitamin B6, vitamin C, likopen, dan vitamin E cukup direkomendasikan. Ketiga vitamin ini dapat memberi manfaat bagi tubuh untuk meningkatkan sistem kekebalan tubuh lebih optimal.',
                'user_id' => 3,
                'created_at' => '2021-11-25 20:12:47',
                'updated_at' => '2021-11-25 20:12:47',
            ],
            [
                'judul' => 'Echinacea',
                'gambar' => 'images/about/2.png',
                'isi' => 'Suplemen yang mengandung echinacea cukup direkomendasikan. Selain mampu meningkatkan sistem kekebalan tubuh Anda, echinacea dipercaya bermanfaat sebagai antivirus, antiradang, dan antioksidan. Oleh karena itu, tumbuhan herba ini dianggap baik untuk membantu tubuh melawan virus penyebab flu.',
                'user_id' => 3,
                'created_at' => '2021-11-24 20:12:47',
                'updated_at' => '2021-11-24 20:12:47',
            ],
        ]);
    }
}

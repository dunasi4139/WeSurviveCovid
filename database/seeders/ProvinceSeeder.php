<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            ['id' => 11, 'name' => 'Aceh NAD'], 
            ['id' => 51, 'name' => 'Bali'], 
            ['id' => 36, 'name' => 'Banten'], 
            ['id' => 17, 'name' => 'Bengkulu'],
            ['id' => 34, 'name' => 'DI Yogyakarta'], 
            ['id' => 31, 'name' => 'DKI Jakarta'], 
            ['id' => 75, 'name' => 'Gorontalo'], 
            ['id' => 15, 'name' => 'Jambi'], 
            ['id' => 32, 'name' => 'Jawa Barat'], 
            ['id' => 33, 'name' => 'Jawa Tengah'], 
            ['id' => 35, 'name' => 'Jawa Timur'], 
            ['id' => 61, 'name' => 'Kalimantan Barat'], 
            ['id' => 63, 'name' => 'Kalimantan Selatan'], 
            ['id' => 62, 'name' => 'Kalimantan Tengah'], 

        ]);
    }
}

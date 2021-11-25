<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['id' => 1, 'name' => 'Aceh NAD'], 
            ['id' => 2, 'name' => 'Bali'], 
            ['id' => 3, 'name' => 'Banten'], 
            ['id' => 4, 'name' => 'DI Yogyakarta'], 
            ['id' => 5, 'name' => 'DKI Jakarta'],  
            ['id' => 6, 'name' => 'Jawa Barat'], 
            ['id' => 7, 'name' => 'Jawa Tengah'], 
            ['id' => 8, 'name' => 'Jawa Timur'], 
            ['id' => 9, 'name' => 'Riau'],
            ['id' => 10, 'name' => 'Lampung'],
        ]);
    }
}

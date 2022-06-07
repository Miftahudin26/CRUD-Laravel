<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_barangs')->insert([
            'Nama' => 'coklat',
            'JenisBarang' => 'kecil',
            'NomorBarang' => '001',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama_siswa'=>'Arya Kurniawan',
            'nis' =>'131319009',
            'alamat'=>'Pohuwato',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama_siswa'=>'Ahmad',
            'nis' =>'131319010',
            'alamat'=>'Gorontalo Utara',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama_siswa'=>'Meylan',
            'nis' =>'131319011',
            'alamat'=>'Tilamuta',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}

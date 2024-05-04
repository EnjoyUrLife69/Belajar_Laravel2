<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Aziz Sudibyo', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'Muzaki Adnan', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'Ibnu Hidayatullah', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'Ahmad Nurzaman', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'Indriyani', 'jenis_kelamin' => 'Perempuan'],
        ];
// masukkan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}

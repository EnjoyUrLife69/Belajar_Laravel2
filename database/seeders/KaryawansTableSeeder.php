<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawans = [
            ['nama' => 'Morgan', 'alamat' => 'Winterfell', 'usia' => '31'],
            ['nama' => 'Elizabeth', 'alamat' => 'Winterfell', 'usia' => '21'],
            ['nama' => 'Arthur', 'alamat' => 'Winterfell', 'usia' => '26'],
        ];
// masukkan data ke database
        DB::table('karyawans')->insert($karyawans);

    }
}

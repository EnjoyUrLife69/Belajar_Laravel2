<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Buku', 'jumlah' => '2'],
            ['nama' => 'Pensil', 'jumlah' => '3'],
            ['nama' => 'Laptop', 'jumlah' => '4'],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}

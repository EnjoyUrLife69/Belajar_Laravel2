<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'CIVIC', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 1],
            ['nama_produk' => 'SUVs', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 2],
            ['nama_produk' => 'XPANDER', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 2],
            ['nama_produk' => 'HR V', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 3],
            ['nama_produk' => 'BRIO', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 3],
            ['nama_produk' => 'ALPARD', 'jumlah' => '100', 'tanggal_produksi' => '3 mei 2024', 'id_merek' => 1],
        ];

        DB::table('produks')->insert($produks);
    }
}

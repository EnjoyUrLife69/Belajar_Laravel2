<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang' => 1, 'id_pembeli' => '1' , 'jumlah' => 'Rp.2 000 000' , 'tanggal' => '4 Mei 2024'],
            ['id_barang' => 2, 'id_pembeli' => '2' , 'jumlah' => 'Rp.3 000 000' , 'tanggal' => '4 Mei 2024'],
            ['id_barang' => 3, 'id_pembeli' => '3' , 'jumlah' => 'Rp.2 000 000' , 'tanggal' => '4 Mei 2024'],
            ['id_barang' => 3, 'id_pembeli' => '4' , 'jumlah' => 'Rp.9 000 000' , 'tanggal' => '4 Mei 2024'],
            ['id_barang' => 1, 'id_pembeli' => '5' , 'jumlah' => 'Rp.10 000 000' , 'tanggal' => '4 Mei 2024'],
        ];

        DB::table('transaksis')->insert($transaksis);

    }
}

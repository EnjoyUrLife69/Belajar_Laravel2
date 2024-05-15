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
            ['id_barang' => 1, 'id_pembeli' => '1' , 'jumlah' => '100' , 'tanggal' => '2024/01/11'],
            ['id_barang' => 2, 'id_pembeli' => '2' , 'jumlah' => '180' , 'tanggal' => '2024/01/21'],
            ['id_barang' => 3, 'id_pembeli' => '3' , 'jumlah' => '120' , 'tanggal' => '2024/01/09'],
            ['id_barang' => 3, 'id_pembeli' => '4' , 'jumlah' => '50' , 'tanggal' => '2024/01/13'],
            ['id_barang' => 1, 'id_pembeli' => '5' , 'jumlah' => '20' , 'tanggal' => '2024/01/16'],
        ];

        DB::table('transaksis')->insert($transaksis);

    }
}

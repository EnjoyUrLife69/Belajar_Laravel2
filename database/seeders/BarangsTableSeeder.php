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
            ['nama_barang' => 'Buku', 'harga' => 'Rp. 5000' , 'stok' => '100' ],
            ['nama_barang' => 'Pensil', 'harga' => 'Rp. 2000' , 'stok' => '500' ],
            ['nama_barang' => 'Tip X', 'harga' => 'Rp. 3000' , 'stok' => '50' ],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}

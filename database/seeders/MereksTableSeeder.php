<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek' => 'Toyota'],
            ['nama_merek' => 'Mitsubishi'],
            ['nama_merek' => 'Honda'],
        ];
// masukkan data ke database
        DB::table('mereks')->insert($mereks);

    }
}

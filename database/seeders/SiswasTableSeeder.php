<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'Upin', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0912839283', 'email' => 'upin@gmail.com'],
            ['nama' => 'Ipin', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0917384743', 'email' => 'ipin@gmail.com'],
            ['nama' => 'Mail', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0993848474', 'email' => 'mail@gmail.com'],
            ['nama' => 'Ehsan', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0991324234', 'email' => 'ehsan@gmail.com'],
            ['nama' => 'Fizi', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0923423432', 'email' => 'fizi@gmail.com'],
            ['nama' => 'Meimei', 'jenis_kelamin' => 'P', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0923542344', 'email' => 'meimei@gmail.com'],
            ['nama' => 'Susanti', 'jenis_kelamin' => 'P', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0918734623', 'email' => 'susanti@gmail.com'],
            ['nama' => 'Dzul', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0934872346', 'email' => 'dzul@gmail.com'],
            ['nama' => 'Ijat', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0923498621', 'email' => 'ijat@gmail.com'],
            ['nama' => 'Jarjit', 'jenis_kelamin' => 'L', 'alamat' => 'Kampung Durian Runtuh', 'agama' => 'Islam', 'telepon' => '0912888283', 'email' => 'jarjit@gmail.com'],

        ];
// masukkan data ke database
        DB::table('siswas')->insert($siswas);

    }
}

<?php

use App\Models\Barang;
use App\Models\Post;
use App\Models\Karyawan;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// route saya
Route::get('/about', function () {
    return '<h1>Welcome</h1>'
        . 'Selamat datang di webapp saya';
});

// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>My Biodata</h1>'
        . '<table>'
        . '<tr>'
        . '<td>Nama</td> '
        . '<td>:</td> '
        . '<td>Moh Bisma Fzarahim</td> '
        . '</tr>'
        . '<tr>'
        . '<td>TTL</td> '
        . '<td>:</td> '
        . '<td>Bandung , 13 Jan 2006</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Agama</td> '
        . '<td>:</td> '
        . '<td>Islam</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Cita-cita</td> '
        . '<td>:</td> '
        . '<td>Pilot</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Sekolah &nbsp;</td> '
        . '<td>:</td> '
        . '<td>SMK ASSALAAM BANDUNG</td> '
        . '</tr>'
        . '</table>'

    ;
});

// route basic passing data to view
Route::get('/animals', function () {
    $kings = "Capybara";
    $animals = ["Monkey", "Donkey", "Dragonfly", "Lion", "Dragon", "Griffin", "Unicorn"];
    return view('animals_page', compact('kings', 'animals'));
});

Route::get('/fruit', function () {
    $fruit = ["apple", "grape", "watermelon", "dragonfruit"];
    return view('fruit_page', compact('fruit'));
});

// route parameters ditandai dengan {}
Route::get('/product/{name}', function ($name) {
    return "product : $name";
});

// tugasss
Route::get('/bmi/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);

    if ($bmi <= 18.5) {
        $ket = "<b>Kamu Kurus</b>";
    } else if ($bmi > 18.5 && $bmi <= 25) {
        $ket = "<b>Kamu Ideal";
    } else if ($bmi > 25 && $bmi <= 30) {
        $ket = "<b>Kamu Gemuk</b>";
    } else {
        $ket = "<b>Kamu Obesitas</b>";
    }

    return
        "<h1>BMI CALCULATOR</h1>" .
        "Nama : $name <br>" .
        "BB : $bb <br>" .
        "TB : $tb <br>" .
        "BMI : $bmi <br>" .
        "keterangan : $ket";

});

// Route Optimal Parameter -> dtandai dengan ?
Route::get('/myname/{name?}', function ($a = "abdu") {
    return "my name is $a";
});

// Menampilkan data dari database
Route::get('/post', function () {
    $post = Post::all();
    return view('tampil_post', compact('post'));

});

// Menampilkan data dari database
Route::get('/barang', function () {
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));

});

Route::get('/testmodel3', function () {
    $karyawan = Karyawan::all();
    
    // $karyawan = new Karyawan;
    // $karyawan->nama = "Ser Sandor Clegane";
    // $karyawan->alamat = "Kings Landing";
    // $karyawan->usia = "46";
    // $karyawan->save();
    
    return $karyawan;
});

Route::get('/siswa', function () {
    $siswa = Siswa::all();
    return view('tampil_siswa', compact('siswa'));


});

//tambah data


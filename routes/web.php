<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;

use App\Models\barang;
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

Route::get('/home', function () {
    return 'ini halaman home';
});

Route::get('/contact', function () {
    return 'ini halaman contact';
});

Route::get('biodata', function () {
    return "Nama Depan       : Pahri" . "<br>" .
        "Nama Belakang    : Abdurrohim" . "<br>" .
        "Tanggal Lahir    : 03-07-2008" . "<br>" .
        "Jenis Kelamin    : Laki-Laki" . "<br>" .
        "Agama            : Islam" . "<br>" .
        "Telpon           : 08972571537" . "<br>";

});
//parameter
Route::get('biodata2/{depan}/{belakang}/{tgllahir}/{jk}/{agama}/{tlpn}', function ($depan, $belakang, $tgllahir, $jk, $agama, $tlpn) {
    return "Nama Depan       : $depan" . "<br>" .
        "Nama Belakang    : $belakang" . "<br>" .
        "Tanggal Lahir    : $tgllahir" . "<br>" .
        "Jenis Kelamin    : $jk" . "<br>" .
        "Agama            : $agama" . "<br>" .
        "Telpon           : $tlpn" . "<br>";

});

Route::get('aritmatika/{bilangan1}/{bilangan2}', function ($bilangan1, $bilangan2) {
    $pertambahan = $bilangan1 + $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian   = $bilangan1 * $bilangan2;
    $pembagian   = $bilangan1 / $bilangan2;

    return "Bilangan 1  : $bilangan1" . "<br>" .
        "Bilangan 2  : $bilangan2" . "<br>" .
        "Pertambahan : $pertambahan" . "<br>" .
        "Pengurangan : $pengurangan" . "<br>" .
        "Perkalian   : $perkalian" . "<br>" .
        "Pembagian   : $pembagian" . "<br>";
});

Route::get('murid', function () {

    $data_murid = ["lutpi", "salman", "dandi", "dio", "agus"];

    $data_kelas = ["XI Rpl 1", "XI Rpl 2", "XI Rpl 3"];

    return view('halaman_murid', compact('data_murid', 'data_kelas'));
});

Route::get('post', [PostsController::class, 'menampilkan']);

Route::get('/barang', function () {

    $barangs = barang::all();

    return view('tampil_barang', compact('barangs'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pendaftaran', PendaftaranController::class);

Route::resource('registrasi', RegistrasiController::class);

Route::resource('buku', BukuController::class);

Route::resource('pengguna', PenggunaController::class);

Route::resource('telepon', TeleponController::class);

Route::resource('kategori', KategoriController::class);

Route::resource('produk', ProdukController::class);

Route::resource('pembeli', PembeliController::class);

Route::resource('obat', ObatController::class);

Route::resource('transaksi', TransaksiController::class);

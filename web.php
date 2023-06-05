<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\JenisHotelController;
use App\Http\Controllers\JenisTempatWisataController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KriteriaHotelController;
use App\Http\Controllers\KriteriaTempatWisataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObjekAtraksiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\TempatWisataController;
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
    return view('index');
});

// fungsi login
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::post('check_login', [LoginController::class, 'checkLogin']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('dashboard', [DashboardController::class, 'index']);


//fasilitas
// Route::get('index', 'App\Http\Controllers\FasilitasController@count_fasilitas');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::post('/fasilitas/create/store',[FasilitasController::class, 'store'])->name('fasilitas.store');
Route::get('/fasilitas', 'FasilitasController@index')->name('fasilitas');
Route::get('/fasilitas-tambah', [FasilitasController::class, 'tambah']);
Route::post('fasilitas-insert', [FasilitasController::class, 'insert']);

Route::get('/fasilitas-delete/{id}', [FasilitasController::class, 'delete']);
Route::get('/edit-fasilitas/{id}',[FasilitasController::class, 'edit']);
Route::post('/update-fasilitas/{id}',[FasilitasController::class, 'update']);

Route::get('/delete-fasilitas/{id}', [FasilitasController::class, 'delete']);
Route::get('/export-fasilitas', [FasilitasController::class, 'export'])->name('export.fasilitas');


Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');

Route::get('/fasilitas-tambah', [FasilitasController::class, 'tambah']);
Route::post('fasilitas-insert', [FasilitasController::class, 'insert']);

//Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');

Route::get('/tambah-pegawai', [PegawaiController::class, 'tambah']);
Route::post('pegawai-insert', [PegawaiController::class, 'insert']);
Route::post('/simpan-pegawai', [PegawaiController::class, 'index'])->name('simpan-pegawai');

//Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/simpan-pemesanan', [PemesananController::class, 'index'])->name('simpan-pemesanan');
Route::get('/pemesanan', 'PemesananController@index')->name('pemesanan');

Route::get('/tambah-pemesanan', [PemesananController::class, 'tambah']);
Route::post('pemesanan-insert', [PemesananController::class, 'insert']);
Route::get('/delete-pemesanaan/{id}', [PemesananController::class, 'delete']);
Route::get('/edit-pemesanan/{id}',[PemesananController::class, 'edit']);
Route::post('/update-pemesanan/{id}',[PemesananController::class, 'update']);
Route::get('/export-pemesanan', [PemesananController::class, 'export'])->name('export.pemesanan');
Route::post('/simpan-pemesanan', [PemesananController::class, 'index'])->name('simpan-pemesanan');

//Hotel
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');

Route::get('/hotel', 'HotelController@index')->name('hotel');

Route::get('/tambah-hotel', [HotelController::class, 'tambah']);
Route::post('hotel-insert', [HotelController::class, 'insert']);

Route::get('/edit-hotel/{id}',[HotelController::class, 'edit']);
Route::post('/update-hotel/{id}',[HotelController::class, 'update']);
Route::get('/delete-hotel/{id}', [HotelController::class, 'delete']);
Route::post('/simpan-hotel', [HotelController::class, 'index'])->name('simpan-hotel');
Route::get('/export-hotel', [HotelController::class, 'export'])->name('export.hotel');

//jenishotel
Route::get('/jenishotel', [JenisHotelController::class, 'index'])->name('jenishotel');

Route::get('/jenishotel', 'JenisHotelController@index')->name('jenishotel');

Route::get('/tambah-jenishotel', [JenisHotelController::class, 'tambah']);
Route::post('jenishotel-insert', [JenisHotelController::class, 'insert']);

Route::get('/edit-jenishotel/{id}',[JenisHotelController::class, 'edit']);
Route::post('/update-jenishotel/{id}',[JenisHotelController::class, 'update']);
Route::get('/delete-jenishotel/{id}', [JenisHotelController::class, 'delete']);
Route::post('/simpan-jenishotel', [JenisHotelController::class, 'index'])->name('simpan-jenishotel');

//kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');

Route::get('/kamar', 'KamarController@index')->name('kamar');

Route::get('/tambah-kamar', [KamarController::class, 'tambah']);
Route::post('kamar-insert', [KamarController::class, 'insert']);
Route::post('/simpan-kamar', [KamarController::class, 'index'])->name('simpan-kamar');
Route::get('/edit-kamar/{id}',[KamarController::class, 'edit']);
Route::post('/kamar-update/{id}', [KamarController::class, 'update']);


//kriteriahotel
Route::get('/kriteriahotel', [KriteriaHotelController::class, 'index'])->name('kriteriahotel');

Route::get('/kriteriahotel', 'KriteriaHotelController@index')->name('kriteriahotel');

Route::get('/tambah-kriteriahotel', [KriteriaHotelController::class, 'tambah']);
Route::post('kriteriahotel-insert', [KriteriaHotelController::class, 'insert']);

Route::get('/edit-kriteriahotel/{id}',[KriteriaHotelController::class, 'edit']);
Route::post('/update-kriteriahotel/{id}',[KriteriaHotelController::class, 'update']);
Route::post('/simpan-kriteriahotel', [KriteriaHotelController::class, 'index'])->name('simpan-kriteriahotel');

//tempatwisata
Route::get('/tempatwisata', [TempatWisataController::class, 'index'])->name('tempatwisata');

Route::get('/tempatwisata', 'TempatWisataController@index')->name('tempatwisata');

Route::get('/tambah-tempatwisata', [TempatWisataController::class, 'tambah']);
Route::post('tempatwisata-insert', [TempatWisataController::class, 'insert']);

Route::get('/edit-tempatwisata/{id}',[TempatWisataController::class, 'edit']);
Route::post('/update-tempatwisata/{id}',[TempatWisataController::class, 'update']);
Route::get('/delete-tempatwisata/{id}', [TempatWisataController::class, 'delete']);
Route::post('/simpan-tempatwisata', [TempatWisataController::class, 'index'])->name('simpan-tempatwisata');


//kriteriatempatwisata
Route::get('/kriteriatempatwisata', [KriteriaTempatWisataController::class, 'index'])->name('kriteriatempatwisata');

Route::get('/kriteriatempatwisata', 'KriteriaTempatWisataController@index')->name('kriteriatempatwisata');

Route::get('/tambah-kriteriatempatwisata', [KriteriaTempatWisataController::class, 'tambah']);
Route::post('kriteriatempatwisata-insert', [KriteriaTempatWisataController::class, 'insert']);
Route::get('/delete-kriteriatempatwisata/{id}', [KriteriaTempatWisataController::class, 'delete']);
Route::get('/edit-kriteriatempatwisata/{id}',[KriteriaTempatWisataController::class, 'edit']);
Route::post('/update-kriteriatempatwisata/{id}',[KriteriaTempatWisataController::class, 'update']);
Route::post('/simpan-kriteriatempatwisata', [KriteriaTempatWisataController::class, 'index'])->name('simpan-kriteriatempatwisata');

//jenistempatwisata
Route::get('/jenistempatwisata', [JenisTempatWisataController::class, 'index'])->name('jenistempatwisata');

Route::get('/jenistempatwisata', 'JenisTempatWisataController@index')->name('jenistempatwisata');

Route::get('/tambah-jenistempatwisata', [JenisTempatWisataController::class, 'tambah']);
Route::post('jenistempatwisata-insert', [JenisTempatWisataController::class, 'insert']);
Route::get('/delete-jenistempatwisata/{id}', [JenisTempatWisataController::class, 'delete']);
Route::get('/edit-jenistempatwisata/{id}',[JenisTempatWisataController::class, 'edit']);
Route::post('/update-jenistempatwisata/{id}',[JenisTempatWisataController::class, 'update']);
Route::post('/simpan-jenistempatwisata', [JenisTempatWisataController::class, 'index'])->name('simpan-jenistempatwisata');

//objekatraksi
Route::get('/objekatraksi', [ObjekAtraksiController::class, 'index'])->name('objekatraksi');

Route::get('/objekatraksi', 'ObjekAtraksiController@index')->name('objekatraksi');

Route::get('/tambah-objekatraksi', [ObjekAtraksiController::class, 'tambah']);
Route::post('objekatraksi-insert', [ObjekAtraksiController::class, 'insert']);
Route::get('/delete-objekatraksi/{id}', [ObjekAtraksiController::class, 'delete']);
Route::get('/edit-objekatraksi/{id}',[ObjekAtraksiController::class, 'edit']);
Route::post('/update-objekatraksi/{id}',[ObjekAtraksiController::class, 'update']);
Route::post('/simpan-objekatraksi', [ObjekAtraksiController::class, 'index'])->name('simpan-objekatraksi');

//penilaian
Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian');

Route::get('/penilaian', 'PenilaianController@index')->name('penilaian');

Route::get('/tambah-penilaian', [PenilaianController::class, 'tambah']);
Route::post('penilaian-insert', [PenilaianController::class, 'insert']);
Route::get('/delete-penilaian/{id}', [PenilaianController::class, 'delete']);
Route::get('/edit-penilaian/{id}',[PenilaianController::class, 'edit']);
Route::post('/update-penilaian/{id}',[PenilaianController::class, 'update']);
Route::post('/simpan-penilaian', [PenilaianController::class, 'index'])->name('simpan-penilaian');

Route::resource('hotel', HotelController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('jenis-hotel', JenisHotelController::class);
Route::resource('jenis-tempat-wisata', JenisTempatWisataController::class);
Route::resource('kamar', KamarController::class);
Route::resource('kriteria-hotel', KriteriaHotelController::class);
Route::resource('kriteria-tempat-wisata', KriteriaTempatWisataController::class);
Route::resource('objek-atraksi', ObjekAtraksiController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('tempat-wisata', TempatWisataController::class);


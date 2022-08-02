<?php

use App\Http\Controllers\HartaKekayaanController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenghasilanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\HartaTidakBergerakController;


use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
return view('home_page');
})->name("tes");

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});

// Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/tes', [TesController::class, 'index'])->name('tes');

//Data Pribadi
// Route::get('/index_data_pribadi', [DataPribadiController::class, 'index_data_pribadi']);

// Laporan Baru
// Route::get('/data_pribadi', [LaporanController::class, 'data_pribadi']);
// Route::get('/data_keluarga', [LaporanController::class, 'data_keluarga']);
// Route::get('/harta_kekayaan', [LaporanController::class, 'harta_kekayaan']);
// Route::get('/penghasilan', [LaporanController::class, 'penghasilan']);
// Route::get('/pengeluaran', [LaporanController::class, 'pengeluaran']);
// Route::get('/selesai', [LaporanController::class, 'selesai']);

//profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile']);

//data pribadi
Route::get('/index_data_pribadi', [App\Http\Controllers\DataPribadiController::class, 'index']);
Route::post('/tambah_data_pribadi', [App\Http\Controllers\DataPribadiController::class, 'tambah_data_pribadi']);

//harta tidak bergerak
Route::get('/index_harta_tidak_bergerak', [App\Http\Controllers\HartaTidakBergerakController::class, 'harta_tidak_bergerak']);
Route::post('/tambah_harta_tidak_bergerak', [App\Http\Controllers\HartaTidakBergerakController::class, 'tambah_harta_tidak_bergerak']);

//harta kendaraan
Route::get('/index_harta_kendaraan', [App\Http\Controllers\HartaKendaraanController::class, 'harta_kendaraan']);
Route::post('/tambah_harta_kendaraan', [App\Http\Controllers\HartaKendaraanController::class, 'tambah_harta_kendaraan']);

//harta usaha
Route::get('/index_harta_usaha', [App\Http\Controllers\HartaUsahaController::class, 'harta_usaha']);
Route::post('/tambah_harta_usaha', [App\Http\Controllers\HartaUsahaController::class, 'tambah_harta_usaha']);

//harta logam
Route::get('/index_harta_logam', [App\Http\Controllers\HartaLogamController::class, 'harta_logam']);
Route::post('/tambah_harta_logam', [App\Http\Controllers\HartaLogamController::class, 'tambah_harta_logam']);

//harta surat berharga
Route::get('/index_harta_surat_berharga', [App\Http\Controllers\HartaSuratBerhargaController::class, 'harta_surat_berharga']);
Route::post('/tambah_harta_surat_berharga', [App\Http\Controllers\HartaSuratBerhargaController::class, 'tambah_harta_surat_berharga']);

//harta uang tunai
Route::get('/index_harta_uang_tunai', [App\Http\Controllers\HartaUangTunaiController::class, 'harta_uang_tunai']);
Route::post('/tambah_data_harta_uang_tunai', [App\Http\Controllers\HartaUangTunaiController::class, 'tambah_harta_uang_tunai']);

//harta piutang
Route::get('/index_harta_piutang', [App\Http\Controllers\HartaPiutangController::class, 'harta_piutang']);
Route::post('/tambah_data_piutang', [App\Http\Controllers\HartaPiutangController::class, 'tambah_harta_piutang']);

//harta hutang
Route::get('/index_harta_hutang', [App\Http\Controllers\HartaHutangController::class, 'harta_hutang']);
Route::post('/tambah_data_harta_hutang', [App\Http\Controllers\HartaHutangController::class, 'tambah_harta_hutang']);

//penghasilan
    //1. penghasilan jabatan
Route::get('/index_penghasilan_jabatan', [App\Http\Controllers\PenghasilanController::class, 'penghasilan_jabatan']);
Route::post('/tambah_penghasilan_jabatan', [App\Http\Controllers\PenghasilanController::class, 'tambah_penghasilan_jabatan']);
  
//2. penghasilan profesi
Route::get('/index_penghasilan_profesi', [App\Http\Controllers\PenghasilanController::class, 'penghasilan_profesi']);
Route::post('/tambah_penghasilan_profesi', [App\Http\Controllers\PenghasilanController::class, 'tambah_penghasilan_profesi']);

//3. penghasilan hibah
Route::get('/index_penghasilan_hibah', [App\Http\Controllers\PenghasilanController::class, 'penghasilan_hibah']);
Route::post('/tambah_penghasilan_hibah', [App\Http\Controllers\PenghasilanController::class, 'penghasilan_hibah']);

//data suami istri
Route::get('/index_data_suamiistri', [App\Http\Controllers\DataKeluargaController::class, 'index_data_keluarga_suamiistri']);
Route::post('/tambah_data_keluarga_suamiistri', [App\Http\Controllers\DataKeluargaController::class, 'tambah_data_keluarga_suamiistri']);

//pengeluaran
Route::get('/index_pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index_pengeluaran']);
Route::post('/tambah_pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'tambah_pengeluaran']);

//harta kekayaan
Route::get('/index_pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index_pengeluaran']);
Route::post('/tambah_pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'tambah_pengeluaran']);

//data anak
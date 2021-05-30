<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes FRONTEND
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Frontend\HalamanUtamaController::class, 'index'])->name('halaman-utama');
Route::get('/program-santri', [App\Http\Controllers\Frontend\ProgramController::class, 'program_santri'])->name('program-santri');
Route::get('/program-tahsin-tahfidz-ikhwan', [App\Http\Controllers\Frontend\ProgramController::class, 'program_tahsin_ikhwan'])->name('program-tahsin-tahfidz-ikhwan');
Route::get('/program-tahsin-tahfidz-akhwat', [App\Http\Controllers\Frontend\ProgramController::class, 'program_tahsin_akhwat'])->name('program-tahsin-tahfidz-akhwat');
Route::get('/program-tahsin-tahfidz-anak', [App\Http\Controllers\Frontend\ProgramController::class, 'program_tahsin_anak'])->name('program-tahsin-tahfidz-anak');
Route::get('/layanan', [App\Http\Controllers\Frontend\LayananController::class, 'index'])->name('layanan');
Route::get('/galeri', [App\Http\Controllers\Frontend\GaleriController::class, 'index'])->name('galeri');
Route::get('/donasi', [App\Http\Controllers\Frontend\DonasiController::class, 'index'])->name('donasi');
Route::get('/laporan-informasi', [App\Http\Controllers\Frontend\LaporanInformasiController::class, 'index'])->name('laporan-informasi');
Route::get('/kontak', [App\Http\Controllers\Frontend\KontakController::class, 'index'])->name('kontak');

/*
|--------------------------------------------------------------------------
| Web Routes ADMIN
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

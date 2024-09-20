<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\JnkController;
use App\Http\Controllers\kKController;
use App\Http\Controllers\KewarganegaraanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PerkawinanController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\PembuatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\VisiController;

use App\Http\Controllers\TambahagamaController;
use App\Http\Controllers\TambahdokumenController;
use App\Http\Controllers\TambahkartuController;
use App\Http\Controllers\TambahpekerjaanController;
use App\Http\Controllers\TambahrolesController;
use App\Http\Controllers\TambahjnkController;
use App\Http\Controllers\TambahperkawinanController;
use App\Http\Controllers\TambahdesaController;
use App\Http\Controllers\TambahpendidikanController;
use App\Http\Controllers\TambahstatusController;



// Rute untuk halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman contact
Route::get('/admin', action: [AdminController::class, 'index'])->name('admin');
Route::get('/agama', [AgamaController::class, 'index'])->name('agama');
Route::get('/desa', action: [DesaController::class, 'index'])->name('desa');
Route::get('/dokumen', action: [DokumenController::class, 'index'])->name('dokumen');
Route::get(uri: '/jnk', action: [JnkController::class, 'index'])->name(name: 'jnk');
Route::get(uri: '/kk', action: [KkController::class, 'index'])->name(name: 'kk');
Route::get(uri: '/kewarganegaraan', action: [KewarganegaraanController::class, 'index'])->name(name: 'kewarganegaraan');
Route::get(uri: '/layanan', action: [LayananController::class, 'index'])->name(name: 'layanan');
Route::get(uri: '/pekerjaan', action: [PekerjaanController::class, 'index'])->name(name: 'pekerjaan');
Route::get(uri: '/pengguna', action: [PenggunaController::class, 'index'])->name(name: 'pengguna');
Route::get(uri: '/pendidikan', action: [PendidikanController::class, 'index'])->name(name: 'pendidikan');
Route::get(uri: '/penduduk', action: [PendudukController::class, 'index'])->name(name: 'penduduk');
Route::get(uri: '/roles', action: [RolesController::class, 'index'])->name(name: 'roles');
Route::get(uri: '/status', action: [StatusController::class, 'index'])->name(name: 'status');
Route::get(uri: '/perkawinan', action: [PerkawinanController::class, 'index'])->name(name: 'perkawinan');


Route::get('/informasi', action: [InformasiController::class, 'index'])->name('informasi');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/grafik', [GrafikController::class, 'index'])->name('grafik');
Route::get('/pembuatan', [PembuatanController::class, 'index'])->name('pembuatan');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/visi', [VisiController::class, 'index'])->name('visi');

Route::get('/tambahagama', action:[TambahagamaController::class, 'index'])->name('tambahagama');
Route::get(uri: '/tambahkartu', action:[TambahkartuController::class, 'index'])->name('tambahkartu');
Route::get(uri: '/tambahroles', action:[TambahrolesController::class, 'index'])->name('tambahroles');
Route::get(uri: '/tambahdokumen', action:[TambahdokumenController::class, 'index'])->name(name: 'tambahdokumen');
Route::get(uri: '/tambahpekerjaan', action:[TambahpekerjaanController::class, 'index'])->name(name: 'tambahpekerjaan');
Route::get(uri: '/tambahjnk', action:[TambahjnkController::class, 'index'])->name(name: 'tambahjnk');
Route::get(uri: '/tambahperkawinan', action:[TambahperkawinanController::class, 'index'])->name(name: 'tambahperkawinan');
Route::get(uri: '/tambahdesa', action:[TambahdesaController::class, 'index'])->name(name: 'tambahdesa');
Route::get(uri: '/tambahpendidikan', action:[TambahpendidikanController::class, 'index'])->name(name: 'tambahpendidikan');
Route::get(uri: '/tambahstatus', action:[TambahstatusController::class, 'index'])->name(name: 'tambahstatus');


// // Route untuk menampilkan form tambah agama
// Route::get('/agama/create', [AgamaController::class, 'create'])->name('agama.create');

// // Route untuk menyimpan data agama
// Route::post('/agama/store', [AgamaController::class, 'store'])->name('agama.store');
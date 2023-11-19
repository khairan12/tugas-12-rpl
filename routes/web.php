<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});
Route ::get('/login', function(){
    return view('login');
    
})->name('login');

Route ::get('/daftar', function(){
    return view('daftar');

});

Route ::get('/petugas', function(){
    return view('daftar-petugas');
});
Route ::get('/halaman', function(){
    return view('halaman');
});

Route ::get('/register', [AuthController::class, 'register']);
Route ::get('/login', [loginController::class, 'index']);
Route ::post('/login', [loginController::class, 'login']);
Route ::post('/register', [AuthController::class, 'store']);


Route ::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi_pengaduan',[PengaduanController::class, 'proses_isi_pengaduan']);
Route::post('/isi_pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route ::get('/hapus_pengaduan/{id}', [ PengaduanController::class,'hapus']);
Route ::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']);
Route ::get('/Update/{id}', [PengaduanController::class, 'update']);
Route ::post('/update/{id}', [PengaduanController::class, 'proses_update']);
Route ::get('/logout', [AuthController::class, 'logout']);



Route ::get('/data-masyarakat', [MasyarakatController::class, 'data_masyarakat']);
Route ::post('/daftar',[MasyarakatController::class, 'daftar_masyarakat']);

Route ::post('/petugas',[PetugasController::class, 'daftar_petugas']);
Route ::get('/data-petugas', [PetugasController::class, 'data_petugas']);
Route ::get('/logpetugas', [PetugasController::class, 'halog']);
Route ::post('/logpetugas', [PetugasController::class, 'proses_login']);
Route ::get('/halpetugas', [PetugasController::class, 'halpetugas']);
Route ::get('/detail-tanggapan/{id}', [PetugasController::class, 'detail_tanggapan']);








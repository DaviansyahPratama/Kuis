<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;
// use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;


 Route::get('/', function () {
     return view('welcome');
 });

// Route::get('/pcr', function () {
    // return 'Selamat datang di website Kampus PCR!';
// });

// Route::get('/mahasiswa', function () {
//     return 'Hallo Mahasiswa';
// });

// Route::get('/nama/{param1}', function ($dapoi) {
//     return 'Nama saya '.$dapoi;
// });

// Route::get('/nim/{param1?}', function ($param1='2455301101') {
//     return 'Nim saya :'.$param1;
// });

// Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route::get('/about',function(){
//     return view('halaman-about');
// });

// Route::get('/matakuliah/{param1?}', [MataKuliahController::class, 'show']);

 Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

 Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

Route::resource('user', UserController::class);
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');


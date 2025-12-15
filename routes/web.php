<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'form']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/login-ajax', [AuthController::class, 'loginAjax']);

/* ROUTE FORM PERTANYAAN */
Route::post('/question', [QuestionController::class, 'store'])
    ->name('question.store');

/* ROUTE DASHBOARD */
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('pelanggan', PelangganController::class);

Route::post('/pelanggan', [PelangganController::class, 'store'])
    ->name('pelanggan.store');

Route::resource('user', UserController::class);

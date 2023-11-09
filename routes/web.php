<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Nama Saya  Fitrah ";
});

Route::get('/nama', [NamaController::class, 'profil']);

Route::get('/menu', [MenuController::class, 'menu']);

Route::get('/formulir', [MahasiswaController::class, 'tampilkanFormulir'])->name('formulir');
Route::post('/simpan_formulir', [MahasiswaController::class, 'simpan_formulir'])->name('simpan_formulir');
Route::get('/formulir/hasil_formulir', [MahasiswaController::class, 'tampilkanHasilFormulir'])->name('hasil-formulir');
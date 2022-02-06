<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\TransaksiController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('pasien', PasienController::class)->middleware('auth:sanctum');
Route::resource('dokter', DokterController::class)->middleware('auth:sanctum');
Route::resource('rekam', RekamController::class)->middleware('auth:sanctum');
Route::resource('obat', ObatController::class)->middleware('auth:sanctum');
Route::resource('transaksi', TransaksiController::class)->middleware('auth:sanctum');
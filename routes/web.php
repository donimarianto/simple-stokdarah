<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Home;

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

Route::get('FormInputDonor',[DonorController::class,'FormInputDonor'])->name('FormInputDonor');
Route::get('viewDataDonor',[DonorController::class,'viewDataDonor'])->name('viewDataDonor');
Route::post('saveDonor',[DonorController::class,'saveDonor'])->name('saveDonor');
Route::get('editForm{id}',[DonorController::class,'editForm'])->name('editForm');
Route::post('upDonor{id}',[DonorController::class,'upDonor'])->name('upDonor');
Route::get('hapus{id}',[DonorController::class,'hapus'])->name('hapus');
Route::get('viewStok',[DarahController::class,'viewStok'])->name('viewStok');
Route::get('pegawai',[PegawaiController::class,'pegawai'])->name('pegawai');
Route::get('viewPegawai',[PegawaiController::class,'viewPegawai'])->name('viewPegawai');
Route::get('editPegawai{id}',[PegawaiController::class,'editPegawai'])->name('editPegawai');
Route::get('Delete{id}',[PegawaiController::class,'Delete'])->name('Delete');
Route::post('editProses{id}',[PegawaiController::class,'editProses'])->name('editProses');
Route::post('savePegawai',[PegawaiController::class,'savePegawai'])->name('savePegawai');


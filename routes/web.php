<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KaryawanController;

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

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/createadmin', function () {return view('admin/createadmin');})->name('createadmin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/hapus{id}', [AdminController::class, 'delete'])->name('admin.hapus');
Route::get('/admin/cetak_pdf', [AdminController::class, 'generatePDF'])->name('admin.cetak_pdf');

//pendidikan
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::get('/creatependidikan', function () {return view('pendidikan/creatependidikan');})->name('creatependidikan');
Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::post('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::get('/pendidikan/hapus{id}', [PendidikanController::class, 'delete'])->name('pendidikan.hapus');
Route::get('/pendidikan/cetak_pdf', [PendidikanController::class, 'generatePDF'])->name('pendidikan.cetak_pdf');

//Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/createkaryawan', [KaryawanController::class, 'create'])->name('createkaryawan');
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
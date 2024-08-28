<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.menu.dashboard');
// });

//DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

//GURU
Route::get('/data_guru', [DataGuruController::class, 'index'])->name('data_guru.index');
Route::get('/tambah_guru',[DataGuruController::class, 'create'])->name('data_guru.create');
Route::post('/tambah_guru',[DataGuruController::class, 'store'])->name('data_guru.store');
Route::get('/detail_guru/{id_guru}',[DataGuruController::class, 'show'])->name('data_guru.show');
Route::get('/edit_guru/{id_guru}/edit',[DataGuruController::class, 'edit'])->name('data_guru.edit');
Route::put('/edit_guru/{id_guru}',[DataGuruController::class, 'update'])->name('data_guru.update');
Route::delete('/data_guru/{id_guru}',[DataGuruController::class, 'destroy'])->name('data_guru.destroy');

//MASTER
Route::get('/master/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
Route::get('/master/tambah_jabatan',[JabatanController::class, 'create'])->name('jabatan.create');
Route::post('/master/tambah_jabatan',[JabatanController::class, 'store'])->name('jabatan.store');
Route::delete('/master/jabatan/{id}',[JabatanController::class, 'destroy'])->name('jabatan.destroy');




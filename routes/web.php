<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//DASHBOARD
Route::get('/admin', [DashboardController::class, 'index']);

//GURU
Route::get('/data_guru', [DataGuruController::class, 'index'])->name('data_guru.index');
Route::get('/tambah_guru',[DataGuruController::class, 'create'])->name('data_guru.create');
Route::post('/tambah_guru',[DataGuruController::class, 'store'])->name('data_guru.store');
Route::get('/detail_guru/{id_guru}',[DataGuruController::class, 'show'])->name('data_guru.show');
Route::get('/edit_guru/{id_guru}/edit',[DataGuruController::class, 'edit'])->name('data_guru.edit');
Route::put('/edit_guru/{id_guru}',[DataGuruController::class, 'update'])->name('data_guru.update');
Route::delete('/data_guru/{id_guru}',[DataGuruController::class, 'destroy'])->name('data_guru.destroy');

//ROLE
Route::get('/data_role', [RoleController::class, 'index'])->name('role.index');
Route::get('/tambah_role',[RoleController::class, 'create'])->name('role.create');
Route::post('/tambah_role',[RoleController::class, 'store'])->name('role.store');

//MATERI
Route::get('/data_materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/tambah_materi',[MateriController::class, 'create'])->name('materi.create');
Route::post('/tambah_materi',[MateriController::class, 'store'])->name('materi.store');
Route::get('/edit_materi/{id_materi}/edit',[MateriController::class, 'edit'])->name('materi.edit');
Route::put('/edit_materi/{id_materi}',[MateriController::class, 'update'])->name('materi.update');
Route::delete('/data_materi/{id_materi}',[MateriController::class, 'destroy'])->name('materi.destroy');

//MASTER
Route::get('/master/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
Route::get('/master/tambah_jabatan',[JabatanController::class, 'create'])->name('jabatan.create');
Route::post('/master/tambah_jabatan',[JabatanController::class, 'store'])->name('jabatan.store');
Route::delete('/master/jabatan/{id}',[JabatanController::class, 'destroy'])->name('jabatan.destroy');

Route::get('/master/mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::get('/master/tambah_mapel',[MapelController::class, 'create'])->name('mapel.create');
Route::post('/master/tambah_mapel',[MapelController::class, 'store'])->name('mapel.store');
Route::delete('/master/mapel/{id}',[MapelController::class, 'destroy'])->name('mapel.destroy');




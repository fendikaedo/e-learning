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
// Route::get('/data_guru', [DataGuruController::class, 'index']);
// Route::get('/tambah_guru',[DataGuruController::class, 'create']);
// Route::post('/tambah_guru',[DataGuruController::class, 'store']);
Route::resource('/data_guru', DataGuruController::class);
Route::resource('/data_jabatan', JabatanController::class);




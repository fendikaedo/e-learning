<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataGuruController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.menu.dashboard');
// });

//DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

//GURU
Route::get('/data_guru', [DataGuruController::class, 'index']);



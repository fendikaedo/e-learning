<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.menu.dashboard');
// });

Route::get('/', [DashboardController::class, 'index']);

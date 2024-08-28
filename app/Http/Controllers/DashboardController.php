<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data_guru = Guru::all();
        return view('admin.menu.dashboard',compact('data_guru'));
    }
}

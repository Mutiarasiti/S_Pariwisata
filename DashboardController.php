<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Session::get('logged_in_pegawai')) {
            return redirect('login')->with('info', 'Kamu harus login dulu');
        } else {
            return view('dashboard');
        }
    }
}

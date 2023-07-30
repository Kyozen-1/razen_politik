<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuteHarianController extends Controller
{
    public function index()
    {
        return view('pengguna.relawan.rute-harian.index');
    }
}

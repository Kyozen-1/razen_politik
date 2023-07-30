<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKunjunganRelawanController extends Controller
{
    public function index()
    {
        return view('pengguna.koordinator.jadwal-kunjungan-relawan.index');
    }
}

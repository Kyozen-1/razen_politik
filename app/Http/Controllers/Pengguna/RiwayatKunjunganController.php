<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatKunjunganController extends Controller
{
    public function index()
    {
        return view('pengguna.relawan.riwayat-kunjungan.index');
    }
}

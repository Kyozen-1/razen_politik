<?php

namespace App\Http\Controllers\Pengguna\Rekapitulasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index()
    {
        return view('pengguna.rekapitulasi.relawan.index');
    }
}

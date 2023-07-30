<?php

namespace App\Http\Controllers\Pengguna\Logistik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        return view('pengguna.logistik.pengeluaran.index');
    }
}

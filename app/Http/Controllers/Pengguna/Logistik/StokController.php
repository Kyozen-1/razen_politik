<?php

namespace App\Http\Controllers\Pengguna\Logistik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        return view('pengguna.logistik.stok.index');
    }
}
